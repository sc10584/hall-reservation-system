<?php 
    session_start();
    require ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Register with Email Verification in PHP Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  
</head>
<body class="bg-light" style="height:1200px;">
    <div class="" >
        <div class="card" style="height:1255px;">
            <div class="card-header text-center">
                <h1>Rabindranath Tagore Auditorium</h1>
            </div>
            <div class="mt-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                    <a class="navbar-brand " href="#">University of Ruhuna</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">about us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">contect us</a>
                            </li>
                        </ul>
                    </div>
                    
                    <form class="justify-content-end">
                        <?php 
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                                echo $_SESSION['username']." - <a href='logout.php' class='btn btn'>LOGOUT</a>";
                                echo /*$_SESSION['username'].*/" - <a href='booking.php' class='btn btn'>RESERVATION</a>";
                               
                            }else{
                                echo "<button type='button' class='btn btn m-1' data-bs-toggle  ='modal' data-bs-target='#loginModal'>Login</button>
                                <button type='button' class='btn btn m-1' data-bs-toggle='modal' data-bs-target='#RegisterModal'>Register</button>";
                                
                            }
                         ?>
                    </form>
                </nav>
                
                <div class="container-fluid p-0">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset\istockphoto-94737409-612x612.jpg" class="d-block w-100" alt="1st image">
                            <div class="carousel-caption">
                                <h5>Leopard</h5>
                                    <small>
                                      
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quibusdam itaque vel. Placeat at, temporibus laboriosam aliquid enim corrupti sunt itaque, soluta debitis quod voluptates ut explicabo aspernatur odio vel?
                                    </small>
                            </div>
                        </div>
                        <div class="carousel-item" style="height:700px;">
                             <img src="asset\istockphoto-157334256-612x612.jpg"class="d-block w-100" alt="2nd image">
                        </div>
                        <div class="carousel-item" style="height:700px;">
                            <img src="asset\istockphoto-173573801-612x612.jpg" class="d-block w-100" alt="3rd image">
                        </div>
                
                        
                    </div>
                </div>


<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #706D6C;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">

            
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=university of ruhuna matara rabindranath auditorium&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">

                    </iframe>
                    <a href="https://piratebay-proxys.com/">Piratebay</a>
                    
                </div>
                <style>.mapouter{position:relative;text-align:right;width:1080px;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:1080px;height:200px;}.gmap_iframe {width:1080px!important;height:200px!important;}</style>
                    
            </div>
        </span>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <address class="row g-color-white-opacity-0_8 mb-0">
      <div class="col-sm-6 col-md-3 g-brd-right--md g-brd-white-opacity-0_3 g-mb-60 g-mb-0--md">
        <i class="icon-line icon-map d-inline-block display-5 g-color-primary g-mb-25"></i>
        <h4 class="small text-uppercase g-mb-5"><i class="fa fa-map-marker" style="font-size:25px;color:red;"></i></br>Address</h4>
        <strong>Orange California, US</strong>
      </div>

      <div class="col-sm-6 col-md-3 g-brd-right--md g-brd-white-opacity-0_3 g-mb-60 g-mb-0--md">
        <h4 class="small text-uppercase g-mb-5"><i class='fas fa-phone-square-alt' style='font-size:25px'></i></br>Phone number</h4>
        <strong><a href="tel:6031112298">603-111-2298</a></strong>
      </div>

      <div class="col-sm-6 col-md-3 g-brd-right--md g-brd-white-opacity-0_3 g-mb-60 g-mb-0--md">
        <i class="icon-envelope d-inline-block display-5 g-color-primary g-mb-25"></i>
        <h4 class="small text-uppercase g-mb-5"><i class="fa fa-envelope" style="font-size:25px"></i></br>Email</h4>
        <a class="g-color-white-opacity-0_8" href="mailto:hello@unify-gym.com">
          <strong>info@htmlstream.com</strong></a>
      </div>

      <div class="col-sm-6 col-md-3">
        <i class="icon-earphones-alt d-inline-block display-5 g-color-primary g-mb-25"></i>
        <h4 class="small text-uppercase g-mb-5"><i class="fa fa-fax" style="font-size:25px"></i></br>Fax</h4>
        <strong>100 302 2302</strong>
      </div>
    </address>  
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
        </div>  

                




                    <?php 
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                            echo "<h1 class='text-center mt-5 pt-5'>Welcome to this website</h1>";
                        }
                    ?>
            </div>
        </div>
        
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="loginModalLabel">Login</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="form">
            <div>
                
                <form action="registration.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="your name" name="username" required>
                        <label for="floatingInput">User Name</label>
                        
                        
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                        <label>Password</label>
                    
                       
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck">
                            <label for="logcheck" class="text">Remember me</label>
                        </div>
                        <a href="forgotpassword.php" class="text">Forget password</a>
                    </div>
                    <div class="input field button">




                        <input type="submit" name="login" value="Login Now">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Not a member</span>
                    <a href="" class="text signup-link">Sign up</a>
                </div>

                
            </div>
            


        </div>
    </div>
    <script src="script.js"></script>
                   
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="RegisterModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="RegisterModalLabel">Register</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                     <div class="form">

        
    <form action="registration.php"method="POST">
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Enter username" required>
            <label for="floatingInput">Username</label>
            
    
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
           
        
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Jhon" name="first_name" required>
            <label for="floatingInput">First Name</label>
           
        
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Wane" name="last_name" required>
            <label for="floatingInput">Last Name</label>
           
        
        </div>



        <div class="form-floating mb-3">
            <input type="tel" name="telnum" class="form-control" id="floatingInput" placeholder="Enter your Telephone Number " required>
            <label for="floatingInput">TelePhone Number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" required id="floatingPassword" placeholder="Create Your Password">
            <label for="floatingPassword">Password</label>
            
        </div>

        <div class="form-floating mb-3">
            <input type="password" required class="form-control" name="confirmpassword" id="floatingPassword" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
           
        
        </div>
       

        <div class="checkbox-text">
            <div class="checkbox-content">
                <input type="checkbox" id="termCon" required>
                <label for="termCon" class="text">I accept all terms and conditions</label>
            </div>
        </div>
         <div class="input field button">
              <input type="submit" name="registration" value="register">
         </div>


         
    </form>
        <div class="login-signup">
            <span class="text">Already a member?</span>
         <a href='#loginModal' class="text login-link">Login now</a>
        </div>
    </div>
       
</div>






</body>
</html>