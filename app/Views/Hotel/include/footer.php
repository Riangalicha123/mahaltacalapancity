<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0; /* Remove default margin */
        }

        .feedback-container {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #333;
        }

        textarea {
            width: 100%; /* Full width on all screens */
            padding: 10px;
            margin: 10px 0; /* Adjust margin for better spacing */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical;
        }

        button {
            width: 100%; /* Full width on all screens */
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-sizing: border-box;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive Styles */
        @media screen and (max-width: 767px) {
            .footer {
                text-align: center;
            }

            .col-md-4 {
                width: 100%;
                margin-bottom: 20px;
                box-sizing: border-box;
            }
        }
        input[type="email"] {
         width: 100%; 
         max-width: 100%; 
         padding: 10px; 
         box-sizing: border-box;
         margin-bottom: 10px;
      }
    </style>
    <script>
        function submitForm() {
            
            const form = document.getElementById('request');
            const formData = new FormData(form);

            fetch('<?= base_url('contact/submitForm') ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</head>
<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> PARANG, CALAPAN CITY, ORIENTAL MINDORO</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> 0961-826-8892</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> mahaltaresorts@gmail.com</a></li>
                     </ul>
                  </div>
                  
                  <div class="col-md-4">
                     <h3>Social Media</h3>
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/DrCEB"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Feedback</h3>
                     <form action="<?= base_url('feedback/submitFeedback') ?>" method="post">
                     <!-- <label for="email" style="color: white;">Email:</label> -->
                         <input type="email" id="email" name="email" placeholder="Your email..." required>
           
                           <textarea id="feedback" name="feedback" placeholder="Type your feedback..." required></textarea>
                           <button type="submit">Submit Feedback</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                  <div class="col-md-10 offset-md-1">
                  <p>
                     &copy; 2023 All Rights Reserved. Design by <a href="https://github.com/riangalicha123" target="_blank">IIIF2 TaskMaster</a>
                  </p>
               </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>