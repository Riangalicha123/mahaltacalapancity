
    <?php include 'include/head.php'?>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?=base_url()?>guest/images/mahaltalogoo.png" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="<?=base_url()?>guest/images/mahaltalogo.jpg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="/home">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/room">Room</a>
                              </li>
                              
                              <li class="nav-item">
                                 <a class="nav-link" href="/contact">Contact Us</a>
                              </li>
                              
                              <?php if(session()->get('isLoggedIn')): ?>
                                 <li class="nav-item"><a class="nav-link" href="/logout">Log Out</a></li>
                              <?php else: ?>
                                 <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                              <?php endif; ?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <?php include 'include/banner.php'?>
      <!-- end banner -->
      <!-- about -->
      <?php include 'include/about.php'?>
      <!-- end about -->
      <!-- our_room -->
      <?php include 'include/room.php'?>
      <!-- end our_room -->
     
      <!--  contact -->
      <?php include 'include/contact.php'?>
      <!-- end contact -->
      <!--  footer -->
      <?php include 'include/footer.php'?>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php include 'include/bottomnav.php'?>
   </body>
</html>