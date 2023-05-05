 
 <x-frontend.layout.master>
	<x-slot name="title">Library</x-slot>
	   <!-- ======= Hero Section ======= -->
  <section class="mt-5">
	<div class="container">
		<div class="row ">
               <div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4 border-left-danger">
				<div class="card-body">Total Requested Book </div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		 </div>
               <div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4 border-left-danger">
				<div class="card-body">Total Requested Book </div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		 </div>
               <div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4 border-left-danger">
				<div class="card-body">Total Requested Book </div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		 </div>
               <div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4 border-left-danger">
				<div class="card-body">Total Requested Book </div>
				<div class="card-footer d-flex align-items-center justify-content-between bg-dark">
					<a class="small text-white stretched-link" href="">View Details</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		 </div>
		{{-- row --}}
		</div>
			
	</div>
  </section>
	  

    <div class="section">
       

 


 
 
 

 

              <!-- Table with stripped rows -->
             <div class="">
				 
				 <table class="table datatable border">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Book Author</th>
                    <th scope="col">Book Edition</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>10</td>
                    <td>2016-05-25</td>
                    <td>Pendin</td>
                    <td>
                      <button class="btn btn-sm btn-success">ReIssue</button>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
			 </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </div>

 
 

 <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</x-frontend.layout.master>
