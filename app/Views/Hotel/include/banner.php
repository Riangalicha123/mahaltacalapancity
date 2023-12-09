<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css"> <!-- Add the correct path to your Bootstrap CSS -->
    <style>
      /* Common styles for all screen sizes */
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

/* Responsive Styles */
@media only screen and (max-width: 768px) {
    .booking_ocline {
        padding: 10px;
    }

    .book_btn {
        width: 100%;
    }

    .book_form {
        width: 80%;
    }
    
    /* Adjust the font size for better readability on smaller screens */
    h3 {
        font-size: 14px;
    }
}

/* Add more media queries as needed for other screen sizes */

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
                           
                          <form class="row g-3" action="/addReservation" method="post">
                                <div class="col-md-6">
                                    <label for="CheckInDate" class="form-label">Check-in Date</label>
                                    <input type="datetime-local" class="form-control" id="CheckInDate" name="CheckInDate" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="CheckOutDate" class="form-label">Check-out Date</label>
                                    <input type="datetime-local" class="form-control" id="CheckOutDate" name="CheckOutDate" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="NumberOfGuests" class="form-label">Number of Guests</label>
                                    <input type="number" class="form-control" id="NumberOfGuests" min="1" name="NumberOfGuests" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="RoomType" class="form-label">Room Type</label>
                                    <select class="form-select form-control" id="RoomType" name="RoomType" required>
                                        <option>Deluxe Room</option>
                                        <option>Executive Room</option>
                                        <option>Premium Room</option>
                                        <option>Family Room</option>
                                        <option>Boutique Room</option>
                                        <option>Presidential Room</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                           <button class="book_btn" onclick="toggleForm('room')">Close</button>
                           </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button class="book_btn" onclick="showForm('restaurant')">Restaurant</button>
                            <div class="book_form form_content" id="restaurantForm">
                            <form class="row g-3">
                            <div class="col-md-6">
                                    <label for="inputFullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="inputFullName">
                                </div>
                                <div class="col-md-6">
                                    <label for="reservationDate" class="form-label">Reservation Date </label>
                                    <input type="datetime-local" class="form-control" id="reservationDate" name="reservationDate">
                                </div>

                                <div class="col-md-6">
                                    <label for="totalAmount" class="form-label">Total Amount</label>
                                    <input type="text" class="form-control" id="totalAmount" name="totalAmount" placeholder="Enter total amount">
                                </div>

                                <div class="col-md-6">
                                    <label for="contact" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                                </div>

                                <div class="col-md-6">
                                    <label for="restaurantName" class="form-label">Restaurant Name</label>
                                    <input type="text" class="form-control" id="restaurantName" name="restaurantName" placeholder="Enter restaurant name">
                                </div>

                                <div class="col-md-6">
                                    <label for="seatingCapacity" class="form-label">Seating Capacity</label>
                                    <input type="number" class="form-control" id="seatingCapacity" name="seatingCapacity" min="1">
                                </div>

                                <div class="col-md-6">
                                    <label for="cuisineType" class="form-label">Cuisine Type</label>
                                    <input type="text" class="form-control" id="cuisineType" name="cuisineType" placeholder="Enter cuisine type">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>


                           <button class="book_btn" onclick="toggleForm('restaurant')">Close</button>

                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button class="book_btn" onclick="showForm('convention')">Convention</button>
                            <div class="book_form form_content" id="conventionForm">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputFullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="inputFullName">
                                </div>
                                <div class="col-md-6">
                                    <label for="eventName" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Enter event name">
                                </div>
                                <div class="col-md-6">
                                    <label for="eventDate" class="form-label">Event Date</label>
                                    <input type="datetime-local" class="form-control" id="eventDate" name="eventDate">
                                </div>

                                <div class="col-md-6">
                                    <label for="eventType" class="form-label">Event Type</label>
                                    <select class="form-control" id="eventType" name="eventType">
                                        <option value="option"></option>
                                        <option value="conference">Conference</option>
                                        <option value="wedding">Wedding</option>
                                        <option value="party">Party</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="eventDescription" class="form-label">Description</label>
                                    <textarea class="form-control" id="eventDescription" name="eventDescription" placeholder="Enter event description"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="contactNumber" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter contact number">
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                                </div>


                                <div class="col-md-6">
                                    <label for="capacity" class="form-label">Capacity</label>
                                    <input type="number" class="form-control" id="capacity" name="capacity" min="1">
                                </div>

                                

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                           <button class="book_btn" onclick="toggleForm('convention')">Close</button>

                            </div>
                        </div>
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleForm(formId) {
        var form = document.getElementById(formId + 'Form');
        form.style.display = (form.style.display === 'block') ? 'none' : 'block';
    }
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