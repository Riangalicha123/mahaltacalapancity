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
         justify-content: space-between;
      }

      .col-md-5, .col-md-3, .col-md-7 {
         width: 48%;
         margin-bottom: 20px;
      }

      .titlepage {
         text-align: left;
      }

      h2 {
         color: #333;
         font-size: 36px;
         margin-bottom: 20px;
      }

      p {
         color: #666;
         font-size: 16px;
         margin-bottom: 30px;
      }

      a.read_more {
         color: #007bff;
         text-decoration: none;
         font-weight: bold;
      }

      .service_item, .about_img {
         background-color: #fff;
         padding: 20px;
         text-align: center;
         border-radius: 8px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s;
      }

      .service_item:hover {
         transform: translateY(-5px);
      }

      h3 {
         color: #333;
         font-size: 24px;
         margin-bottom: 10px;
      }

      .about_img img {
         max-width: 100%;
         height: auto;
         border-radius: 8px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      
      .modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 70%;
   height: 70%;
   overflow: auto;
   
}

.modal-content {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   max-width: 50%;
   padding: 20px;
  margin-top:90px;
  margin-left:230px;
   border-radius: 2px;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.close {
   position: absolute;
   top: 0;
   right: 0;
   color: #fff;
   font-size: 30px;
   font-weight: bold;
   padding: 10px;
   cursor: pointer;
}
.titlepage {
      text-align: center; 
      margin-top:20px;
   }
  
   </style>
</head>
<body>
   <div class="container">
      <div class="titlepage">
         <h2>Our Services</h2>
      </div>
      <div  class="row mx-auto">
       
         <div class="col-md-3 col-sm-12">
            <div class="service_item">
               <h3>Room</h3>
               <p>Our hotel room offers comfort and elegance, complete with modern amenities, plush furnishings, and a tranquil ambiance for a relaxing stay.</p>
               <img class="service_img" src="<?=base_url()?>guest/images/room1.jpg" alt="Service 3 Image" onclick="openModal('room1.jpg')">
             <br>
             <br>
               <a href="#" class="btn btn-primary" data-src="<?=base_url()?>guest/images/room1.jpg" onclick="openModal(this)">See Photo</a>
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
         <div class="service_item">
               <h3>Convention Center</h3>
               <p>Experience a modern convention center perfect for hosting conferences, meetings, and events with ease and efficiency.</p>
               <img class="service_img" src="<?=base_url()?>guest/images/center.jpg" alt="Service 3 Image" onclick="openModal('center.jpg')">
             <br>
             <br>
               <a href="#" class="btn btn-primary" data-src="<?=base_url()?>guest/images/center.jpg" onclick="openModal(this)">See Photo</a>
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
         <div class="service_item">
               <h3>Restuarant</h3>
               <p>Our hotel room provides a comfortable and elegant stay, featuring modern amenities, plush furnishings, and a tranquil ambiance.</p>
               <img class="service_img" src="<?=base_url()?>guest/images/restuarant.png" alt="Service 3 Image" onclick="openModal('restuarant.png')">
             <br>
             <br>
               <a href="#" class="btn btn-primary" data-src="<?=base_url()?>guest/images/restuarant.png" onclick="openModal(this)">See Photo</a>
            </div>
         </div>

         <div class="col-md-3 col-sm-12">
         <div class="service_item">
               <h3>Pool</h3>
               <p>Our inviting pool offers a refreshing escape with crystal-clear waters and  perfect for ultimate enjoyment and rejuvenation.</p>
               <img class="service_img" src="<?=base_url()?>guest/images/pools.jpg" alt="Service 3 Image" onclick="openModal('pools.jpg')">
             <br>
             <br>
               <a href="#" class="btn btn-primary" data-src="<?=base_url()?>guest/images/pools.jpg" onclick="openModal(this)">See Photo</a>
            </div>
         </div>

      </div>
   </div>

   <!-- Modal -->
   <div id="myModal" class="modal">
      <div class="modal-content">
         <span class="close" onclick="closeModal()">&times;</span>
         <img id="modalImage" src="" alt="Popup Image">
      </div>
   </div>

   <script>
      var modal = document.getElementById("myModal");
      var modalImg = document.getElementById("modalImage");

      function openModal(element) {
         var imgSrc = element.getAttribute("data-src");
         modal.style.display = "block";
         modalImg.src = imgSrc;
      }

      function closeModal() {
         modal.style.display = "none";
      }

      window.onclick = function(event) {
         if (event.target == modal) {
            closeModal();
         }
      };
   </script>
</body>
</html>
