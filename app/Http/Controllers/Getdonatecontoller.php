<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\getdonate;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
class Getdonatecontoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getdonate=getdonate::latest()->get();
       
        return view('backend.getdonate.index',compact('getdonate'));
    }
    public function reissue()
    {
     
         
        // $getdonate = getdonate::where('status', 'reissue')->latest()->get();
         
        $getdonate=getdonate::latest()->get();
        return view('backend.getdonate.reissue',compact('getdonate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }


    public function store(Request $request)
    {
       $id = $request->user_id;
        // $result = getdonate::where('user_id', $id && 'status','issue')->count();
        $result = DB::table('getdonate')
                ->where('user_id', '=', $id)
                ->where('status', '=', 'issue')
                ->count();
        if($result>1)
        {
            return redirect()->back()->withMessage('Please return one book');
        }
        else
        {
            getdonate::create([
                'user_id'=>$request->user_id,
                'book_id'=> $request->book_id,
             
               ]
               );
               return redirect()->back()->withMessage('Successfully');
        }
  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$bookid)
    {
        //
        $book=Product::findOrFail($bookid);
        $result=$book->bookquantity-1;
        $book->update([
  
            'bookquantity'=>$result,
        
             
           ]
          );
         
        $getdonateupdate=getdonate::findOrFail($id);
         
        $currentDate = Carbon::today();

        $dates= $currentDate->format('Y-m-d');
        $uuid ="AP".$id;
        $getdonateupdate->update([
  
          'status'=>"approved",
          'approved_date'=>$dates,
          'approved_id'=>$uuid,
        
           
         ]
        );
        return redirect()->back()->withMessage('Successfully updated');
    }

    public function issue(Request $request,$id)
    {
        $getdonateupdate=getdonate::findOrFail($id);
         
        $currentDate = Carbon::today();

        $dates= $currentDate->addDays(7)->format('Y-m-d');
        $uuid ="RT".$id;
        $getdonateupdate->update([
  
          'status'=>"issue",
          'issue_date'=>$currentDate, 
          'return_date'=>$dates, 
          'approved_id'=>$uuid,
         ]
        );
        return redirect()->back()->withMessage('Successfully updated');
    }
   
    public function reissue_cancel(Request $request,$id)
    {
        $getdonateupdate=getdonate::findOrFail($id);
         
         
        $getdonateupdate->update([
  
          'status'=>"issue",
           
         ]
        );
        return redirect()->back()->withMessage('Successfully updated');
    }
   
    public function return(Request $request,$id,$bookid)
    {
        $getdonateupdate=getdonate::findOrFail($id);
         
         
        $getdonateupdate->update([
  
          'status'=>"return",
           
         ]
        );
        $book=Product::findOrFail($bookid);
        $result=$book->bookquantity+1;
        $book->update([
  
            'bookquantity'=>$result,
        
             
           ]
          );
        return redirect()->back()->withMessage('Successfully updated');
    }
    public function reissue_update(Request $request,$id)
    {
        $getdonateupdate=getdonate::findOrFail($id);
         
         
        $getdonateupdate->update([
  
          'status'=>"reissue",
           
         ]
        );
        
        return redirect()->back()->withMessage('Successfully updated');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id,$bookid)
    {
       

        $getdonateupdate=getdonate::findOrFail($id);
        if( $getdonateupdate->status=="approved")
        {
 $book=Product::findOrFail($bookid);
        $result=$book->bookquantity+1;
        $book->update([
  
            'bookquantity'=>$result,
        
             
           ]
          );
        }
        $getdonateupdate->update([
  
            'status'=>"cancel",
             
          
             
           ]
          );
        return redirect()->back()->withMessage('Request Cancel');
    }
}
