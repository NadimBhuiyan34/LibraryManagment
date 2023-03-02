<x-frontend.layout.master>
    <x-slot name="title">SellBook_Form</x-slot>
    
<section class="" style="">

    <div class="card-body container" style="background-color: #f7f5f9">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                   
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Return Date</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Approved ID</th>

                   
                </tr>
            </thead>

            <tbody>
                @foreach ($getdonate as $sellbook)


                <tr>
                    <td>{{ $loop->iteration }}</td>
                  
                    <td>{{ $sellbook->product->booktitle }}</td>
                    <td>{{ $sellbook->product->bookauthor }}</td>
                    <td>{{ $sellbook->product->bookedition }}</td>
                    <td>{{ $sellbook->return_date }}</td>
                    <td>
                     
                        @if ($sellbook->status=="approved")
                        <button class="btn btn-success btn-sm">Approved</button>
                        @elseif ($sellbook->status=="cancel")
                        <button class="btn btn-danger btn-sm">Cancel</button>
                        @elseif ($sellbook->status=="issue")
                        <button class="btn btn-danger btn-sm">Issue</button>
                        @elseif ($sellbook->status=="return")
                        <button class="btn btn-success btn-sm">returned</button>
                        @elseif ($sellbook->status=="reissue")
                        <button type="button" class="btn btn-primary btn-sm">
                            Issue <span class="badge badge-light">{{ $sellbook->status }}</span>
                          </button>
                        @else
                        <button class="btn btn-info btn-sm">Pending</button>
                        @endif
                         
                    </td>
                    <td>
                        @if (!$sellbook->status=="cancel"||!$sellbook->status=="issue" || !$sellbook->status=="return")
                        <a href="{{ route('getdonates.destroy',['id'=>$sellbook->id, 'bookid'=>$sellbook->product->id]) }}" class="btn btn-danger btn-sm ml-2">Cancel</a> 
                        @endif

                        @if ($sellbook->status=="issue")
                        <a href="{{ route('reissue.update',['id'=>$sellbook->id]) }}" class="btn btn-primary btn-sm ml-2">ReIssue</a> 
                        
                         
                        @endif
                    </td>
                    <td>{{ $sellbook->approved_id }}</td>
                    
                    {{-- @elseif ($sellbook->status=="issue")
                    <a href="{{ route('return.update',['id'=>$sellbook->id,'bookid'=>$sellbook->product->id]) }}" class="btn btn-info btn-sm">Return</a> --}}
                     
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


 
</x-frontend.layout.master>
</section>