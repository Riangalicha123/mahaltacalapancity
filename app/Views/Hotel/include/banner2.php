<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahalta</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-iBhx+u0Oa7/8AMxflAvLftGzTpPe5CHd8O+JdsLkaayP/hFgUBS9uP2aTbdH5zIebprJs1Pifz1iTH8Ii2NpWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-iBhx+u0Oa7/8AMxflAvLftGzTpPe5CHd8O+JdsLkaayP/hFgUBS9uP2aTbdH5zIebprJs1Pifz1iTH8Ii2NpWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Add your styles here */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #3498db, #2ecc71);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .booking_ocline {
            padding: 20px;
        }

        .book_btn {
            background-color: #fff;
            color: #333;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .book_form {
            display: none;
            margin-top: 20px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            z-index: 999;
        }

        .book_form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

       
    
    h3 {
            color: white !important; 
        }
    </style>
</head>
<body>
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            
            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="<?=base_url()?>guest/images/1.jpg" alt="First slide">
                    <div class="container"></div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="<?=base_url()?>guest/images/3.jpg" alt="Third slide">
                </div>
            </div>
            
            <!-- Carousel Navigation -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="book_room">
                     <h3 style="text-align: justify;">At Mahalta Resorts and Convention Center, the company motto is “Where moments and memories become one.” This reflects the resort’s commitment to providing guests with an unforgettable experience that they will cherish for a lifetime. Whether you are looking to escape the city for a relaxing beach vacation or to host a memorable event, Mahalta Resorts and Convention Center has everything you need to make your dreams a reality.</h3>
                    
                   

                     </div>
                  </div>
               </div>
            </div>
            </div>  
       
</section>


</body>
</html>

<!--<div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="book_room">
                        <h1>Book a Room Online</h1>
                        <form class="book_now">
                           <div class="row">
                              <div class="col-md-12">
                                 <span>Arrival</span>
                                 <img class="date_cua" src="<?=base_url()?>guest/images/date.png">
                                 <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                              </div>
                              <div class="col-md-12">
                                 <span>Departure</span>
                                 <img class="date_cua" src="<?=base_url()?>guest/images/date.png">
                                 <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                              </div>
                              <div class="col-md-12">
                                 <button class="book_btn">Book Now</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>-->