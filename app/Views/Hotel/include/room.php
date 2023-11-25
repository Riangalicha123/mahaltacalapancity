<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us and Services</title>
   <style>
      body {
         font-family: 'Arial', sans-serif;
         margin: 0;
         padding: 0;
         background-color: #f4f4f4;
      }

      .container-fluid, .container {
         max-width: 1200px;
         margin: 0 auto;
      }

      .row {
         display: flex;
         flex-wrap: wrap;
         justify-content: space-around;
      }

      .col-md-4 {
         width: 30%;
         margin-bottom: 20px;
         position: relative;
      }

      .room {
         background-color: #fff;
         padding: 20px;
         text-align: center;
         border-radius: 8px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s;
      }

      .room:hover {
         transform: translateY(-5px);
      }

      .room_img img {
         max-width: 100%;
         height: auto;
         border-radius: 8px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s;
      }

      .room_img img:hover {
         transform: scale(1.1);
      }

      h3 {
         color: #333;
         font-size: 18px;
         margin-bottom: 10px;
      }

      p {
         color: #666;
         font-size: 16px;
         margin-bottom: 20px;
      }

      .price {
         color: #333;
         font-size: 20px;
         font-weight: bold;
         margin-bottom: 10px;
      }

      .btn-reservation {
         background-color: #007bff;
         color: #fff;
         padding: 10px 20px;
         text-decoration: none;
         border-radius: 5px;
         display: inline-block;
         transition: background-color 0.3s;
      }

      .btn-reservation:hover {
         background-color: #0056b3;
      }

      .titlepage {
         text-align: center; 
         margin-top: 20px;
      }
   </style>
</head>
<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> Rooms</h2>
                     <p>Experience luxury and comfort in our meticulously designed hotel rooms, offering a perfect blend of modern amenities and elegant decor for a relaxing stay. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="<?=base_url()?>guest/images/room1.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Deluxe Room</h3>
                        <p>Indulge in the opulence of our Deluxe Rooms breathtaking views and providing a perfect retreat for a memorable stay.</p>
                        <div class="price">$150 per night</div>
                  <a href="#" class="btn-reservation">Book Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="<?=base_url()?>guest/images/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executive Room</h3>
                        <p>Experience in our Executive Suites, where spacious living areas and sophisticated design converge to create a lavish ambiance.</p>
                        <div class="price">$150 per night</div>
                  <a href="#" class="btn-reservation">Book Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="<?=base_url()?>guest/images/room3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Premium Room</h3>
                        <p>Our Premium Suites offer a haven of tranquility, boasting exclusive amenities and a refined atmosphere for a truly indulgent escape.</p>
                        <div class="price">$150 per night</div>
                  <a href="#" class="btn-reservation">Book Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="<?=base_url()?>guest/images/room4.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Family Room</h3>
                        <p>Discover the charm of our Family Rooms, thoughtfully designed to accommodate the whole family, with ample space and a range of family-friendly amenities. </p>
                        <div class="price">$150 per night</div>
                  <a href="#" class="btn-reservation">Book Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="<?=base_url()?>guest/images/room5.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Boutique Room</h3>
                        <p>Unwind in style in our Boutique Rooms, uniquely crafted to provide a  modern design elements with personalized service for a distinctive stay. </p>
                        <div class="price">$150 per night</div>
                  <a href="#" class="btn-reservation">Book Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="<?=base_url()?>guest/images/room6.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Presidential Room</h3>
                        <p>Embrace the ultimate in elegance with our Presidential Suite, a  exclusive privileges, ensuring an unparalleled experience in luxury living. </p>
                        <div class="price">$150 per night</div>
                  <a href="#" class="btn-reservation">Book Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>