 
 <x-frontend.layout.master>

     
	<x-slot name="title">Teacher</x-slot>
 <section class="mt-5 container">
     <div class="row">
          <div class="input-group mb-2 w-50 mx-auto" >
           <input type="text" class="form-control shadow" placeholder="Search here" style="border-radius:20px;" id="search">
 
          </div>
       </div>
        <div class="row ">
       
        <div class="col-md-3 col-6 col-xl-3 col-sm-6 col-md-4 mx-auto gap-1">

           <div class="card p-2 py-3 text-center border-left-info mx-auto">
                    
        <div class="img mb-2 d-flex">

            <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?w=2000" alt="Generic placeholder image" class="img-fluid mx-auto"
                  style="width: 180px; border-radius: 10px;">

               <span class="position-absolute translate-middle badge rounded-pill bg-danger top-1 start-90 ms-4 shadow">
    <strong class=""> Stock <span class="fs-6">5</span> </strong>
    <span class="visually-hidden">unread messages</span>
  </span>
            
        </div>

            <h6 style="color:#041f8a">PS-1236</h6>
            <small>Nadim Bhuiyan</small>
            <p>12 June 2023</p>

        
        <div class="mt-1 apointment d-flex justify-content-center gap-2">

           <a href=""> <i class="fa-brands fa-square-facebook text-primary"></i></a>
           <a href=""> <i class="fa-brands fa-twitter text-info"></i></a>
           
        </div>
           </div>
       </div>
        </div>
  </section>
 <script>
    // get the search input field and all the card elements
const searchInput = document.getElementById('search');
const cards = document.querySelectorAll('.card');

// add event listener to search input field
searchInput.addEventListener('input', filterCards);

function filterCards() {
  // get the search input value and convert it to lowercase
  const searchValue = searchInput.value.toLowerCase();

  // loop through all the card elements and check if their text content matches the search input value
  for (let i = 0; i < cards.length; i++) {
    const card = cards[i];
    const cardTitle = card.querySelector('h6').textContent.toLowerCase();
    const cardSubtitle = card.querySelector('small').textContent.toLowerCase();
    const cardDate = card.querySelector('p').textContent.toLowerCase();
    const isMatch = cardTitle.includes(searchValue) || cardSubtitle.includes(searchValue) || cardDate.includes(searchValue);

    // show or hide the card elements based on the search results
    if (isMatch) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  }
}

  </script>
</x-frontend.layout.master>
