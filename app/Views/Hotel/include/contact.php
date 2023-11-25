<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .contact {
            padding: 50px 0;
        }

        .chat-container {
    max-width: 800px; /* Adjust this value to your desired width */
    height:450px;
    margin: auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

        .chat-box {
            padding: 15px;
            border-bottom: 1px solid #ccc;
        }

        .user-message {
            text-align: right;
            color: #007bff;
        }

        .bot-message {
            text-align: left;
            color: #28a745;
        }

        input[type="text"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    width: 5%; /* Adjust this value to your desired button width */
    margin: 10px auto; /* Center the button horizontally */
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-sizing: border-box;
}
    </style>
</head>
<body>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <form id="request" class="main_form">
                <div class="chat-container">
            <div class="chat-box bot-message">
                <p>Welcome! How can I assist you today?</p>
            </div>
            <div id="chat-form">
                <input type="text" id="user-input" placeholder="Type your message...">
                
            </div>
            <button onclick="sendMessage()">Send</button>
        </div>
                   
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
