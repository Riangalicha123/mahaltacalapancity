<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
    
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
  }
  
</style>

</head>
<body>




<div class="our_room">

<div class="container">

<div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> Blog</h2>
                     <p>Explore our blog, relax by the pool, enjoy culinary delights in our restaurant, and stay updated with exclusive offers at convention center.</p>
                  </div>
               </div>
            </div>
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop  ">
        <div class="d-flex align-items-center mb-2">
          <img src="<?=base_url()?>guest/images/center.jpg"  width="500px">
          
        </div>  
        <h4 class="m-0 ms-3">Convention Center</h4>
          <p style="text-align: justify;">
          Experience our modern convention center perfect for hosting conferences, meetings, and events with ease and efficiency.
          </p> 
          <a href="#" class="btn btn-info book-now-button">Book Now</a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop  ">
        <div class="d-flex align-items-center mb-2">
          <img src="<?=base_url()?>guest/images/pools.jpg"  width="500px">
          
        </div>  
        <h4 class="m-0 ms-3">Pool</h4>
          <p style="text-align: justify;">
          Our inviting pool offers a refreshing escape with crystal-clear waters and  perfect for ultimate enjoyment .
          </p> 
          <a href="#" class="btn btn-info book-now-button">Book Now</a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop  ">
        <div class="d-flex align-items-center mb-2">
          <img src="<?=base_url()?>guest/images/restuarant.png"  width="500px">
          
        </div>  
        <h4 class="m-0 ms-3">Resturant</h4>
          <p style="text-align: justify;">
          Our hotel room provides a comfortable and elegant stay, featuring modern amenities and a tranquil ambiance.
          </p> 
          <a href="#" class="btn btn-info book-now-button">Book Now</a>
      </div>
    </div>
    
   <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">Wifi</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>-->
   
    
    
  </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>