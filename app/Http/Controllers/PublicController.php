<?php

namespace App\Http\Controllers;
use App\Models\carousel;
use App\Models\getdonate;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $carousels=carousel::all();
        $allrequest=getdonate::all();
         
        $issue = getdonate::where('status', 'issue')->get();
        $return = getdonate::where('status', 'return')->get();
         
        
        return view('frontend.home',compact('carousels','allrequest','issue','return'));
    }
  
    //logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('homepage')->with('message','You have been logged Out');
    }

    
    
}
