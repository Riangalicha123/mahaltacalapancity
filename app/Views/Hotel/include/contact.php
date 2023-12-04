<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .contact {
            padding: 60px 0;
            background: linear-gradient(to top, #87CEEB, #ffffff);
        }

        .main_form {
            margin-top: 20px;
        }

        .contactus {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        .send_btn {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-sizing: border-box;
            transition: background-color 0.3s;
        }

        .send_btn:hover {
            background-color: #0056b3;
        }

        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        /* Responsive Styles */
        @media screen and (max-width: 767px) {
            .contactus,
            .textarea,
            .send_btn {
                width: 100%; /* Make form elements full-width on small screens */
            }
        }
    </style>
</head>
<body>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Name" type="text" name="Name"> 
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="text" name="Email"> 
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7761.750176350001!2d121.20824972542549!3d13.42005806230071!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bce9395c682133%3A0x2a54eb8df931b1c2!2sMahalta%20Resorts%20and%20Convention%20Center!5e0!3m2!1sen!2sph!4v1700304323303!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
