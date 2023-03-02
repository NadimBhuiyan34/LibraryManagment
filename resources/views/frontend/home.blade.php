 
 <x-frontend.layout.master>
	<x-slot name="title">HomePage</x-slot>
	{{-- <marquee behavior="" direction="right" style=" background-color:#fcfefc;width:100%;color: black;">
		<div class="d-inline-block">
			<div class="d-inline-block">
				<img src="{{ asset('ui/frontend/images/book/welcome.gif') }}" alt="" style="width:100px;height:60px">
			</div>
			<div class="d-inline-block">
				<p><b>University Boighar</b></p>
			</div>
			<div class="d-inline-block">
				<img src="{{ asset('ui/frontend/images/book/walking-reading.gif') }}" alt="" style="width:100px;height:60px">
			</div>
		
		</div>
		@dd()
		 
		
	</marquee> --}}
	 
	<section class=" gray-bg ">
		<div class="container">
			<div class="row mt-3">
				 @php
					$issue1=0;
					$totalrequest=0;
					$return1=0;
				 @endphp

 



		@foreach ($return as $data3)
		 @if ($data3->user_id==auth()->user()->id && $data3->status=="return")
		  @php
			$return1=$return1+1;
		  @endphp
		   
		 @endif
		 
		@endforeach

		@foreach ($issue as $data1)
		 @if ($data1->user_id==auth()->user()->id && $data1->status=="issue")
		  @php
			$issue1=$issue1+1;
		  @endphp
		   
		 @endif
		 
		@endforeach

		@foreach ($allrequest as $data)
		 @if ($data->user_id==auth()->user()->id)
		  @php
			$totalrequest=$totalrequest+1;
		  @endphp
		   
		 @endif
		 
		@endforeach

		{{-- @foreach ($issue as $data1)
		 @if ($data1->user_id==auth()->user()->id && $data1->status=="issue")
		  @php
			$issue=$issue+1;
		  @endphp
		 @endif
		@endforeach --}}
		{{-- @foreach ($return as $data1)
		 @if ($data1->user_id==auth()->user()->id && $data1->status=="return")
		  @php
			$return=$return+1;
		  @endphp
		 @endif
		@endforeach --}}
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">Total Requested Book {{ $totalrequest }}</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="{{ route('requestbooks.create',['id'=>auth()->user()->id]) }}">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">Total Issue {{ $issue1 }}</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
			 
			   <div class="col-xl-3 col-md-6">
				   <div class="card bg-warning text-white mb-4">
					   <div class="card-body">Return Book {{ $return1 }}</div>
					   <div class="card-footer d-flex align-items-center justify-content-between">
						   <a class="small text-white stretched-link" href="#">View Details</a>
						   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-xl-3 col-md-6">
				   <div class="card bg-danger text-white mb-4">
					   <div class="card-body">Danger Card</div>
					   <div class="card-footer d-flex align-items-center justify-content-between">
						   <a class="small text-white stretched-link" href="#">View Details</a>
						   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
					   </div>
				   </div>
			   </div>
			</div>
		  </div>
		 
 <div class="mx-3 row ">
 
  <div class="col-md-9 ">
	<x-frontend.layout.partials.carousel :carousels="$carousels"/> 
  </div>
  <div class="col-md-3 mx-auto " style="width:300px">
	<x-frontend.watch.watch/>
	{{-- <x-frontend.watch.calender/> --}}
	 <img src="{{ asset('ui/frontend/images/book/book2.png') }}" alt="" style="width:300px;height:240px"  class="rounded ">
  </div>
  
 

</div>
 
 
 
 
 
	<section class=" service gray-bg ">
		<h1 class="text-center" style="margin-bottom: 100px;">Best Sell Book</h1>
   
		   <div class="row">
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex">
						  <img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
   
					    
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   
				   </div>
			   </div>
 




   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend') }}/images/2.png" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend') }}/images/3.png" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
   
   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
   
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
						  </div>
					   </div>
				   </div>
			   </div>
   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
   </section>
	 
 
</x-frontend.layout.master>
