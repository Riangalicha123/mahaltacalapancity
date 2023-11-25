<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css"> <!-- Add the correct path to your Bootstrap CSS -->
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

        .close_btn {
        background: none;
        border: none;
        color: #000;
        font-size: 18px;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
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
                        <h1>Book Online</h1>
                        <div class="col-md-12">
                           <button class="book_btn" onclick="showForm('room')">Room</button>
                           <div class="book_form form_content" id="roomForm">
                           
                              <form class="row g-3">
                                    <div class="col-md-6">
                                       <label for="inputEmail4" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="inputPassword4" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                       <label for="inputAddress" class="form-label">Address</label>
                                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                              </form>
                              <button class="close_btn" onclick="closeForm('room')">X</button>
                           </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button class="book_btn" onclick="showForm('restaurant')">Restaurant</button>
                            <div class="book_form form_content" id="restaurantForm">
                            <form class="row g-3">
                                    <div class="col-md-6">
                                       <label for="inputEmail4" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="inputPassword4" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                       <label for="inputAddress" class="form-label">Address</label>
                                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                              </form>
                              <button class="close_btn" onclick="closeForm('room')">X</button>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button class="book_btn" onclick="showForm('convention')">Convention</button>
                            <div class="book_form form_content" id="conventionForm">
                            <form class="row g-3">
                                    <div class="col-md-6">
                                       <label for="inputEmail4" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="inputPassword4" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                       <label for="inputAddress" class="form-label">Address</label>
                                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                              </form>
                              <button class="close_btn" onclick="closeForm('room')">X</button>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button class="book_btn" onclick="showForm('pool')">Pool</button>
                            <div class="book_form form_content" id="poolForm">
                            <form class="row g-3">
                                    <div class="col-md-6">
                                       <label for="inputEmail4" class="form-label">Email</label>
                                       <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                       <label for="inputPassword4" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                       <label for="inputAddress" class="form-label">Address</label>
                                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                              </form>
                              <button class="close_btn" onclick="closeForm('room')">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        function showForm(formId) {
            // Hide all forms
            document.querySelectorAll('.form_content').forEach(function(form) {
                form.style.display = 'none';
            });

            // Show the selected form
            document.getElementById(formId + 'Form').style.display = 'block';
        }

        function closeForm(formId) {
            // Hide the selected form
            document.getElementById(formId + 'Form').style.display = 'none';
        }
    </script>

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