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
    <!--g;ljkhmkljh,kphj,k-->
        <div class="card" style="height:1255px;">
            <div class="card-header text-center">
                <h1>Rabindranath Tagore Auditorium</h1>
            </div>
            <div class="">
                <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                    <a class="navbar-brand " href="booking.php">University of Ruhuna</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                        <li class="nav-item">
                                <a class="nav-link" href="booking.php"></i>Home</a>
                            </li>
                        

                            <li class="nav-item ">
                                <a class="nav-link" href="../requestletter/requestletter.php">Request letter </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../booking/checkoutrqsthall.php">Booking</a>
                            </li>
                            

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Payments
                                </a>
                                    <ul class="dropdown-menu dropdown bg-dark " aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item text-light" href="">Advaced Payment</a></li>
                                        <li><a class="dropdown-item text-light" href="">Full Payment</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Refundable Payment</a></li>
                                    </ul>
                        </ul>
                    </div>
                    
                    <form class="justify-content-end">
                        <?php 
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                                echo "<i class='fa fa-fw fa-user'></i>".$_SESSION['username']." you are logged in! "."  <a href='logout.php' class='link-dark'>logout</a>";
                               
                            }else{
                                echo "<button type='button' class='btn btn m-1' data-bs-toggle  ='modal' data-bs-target='#loginModal'><i class='fa fa-fw fa-user'></i>Login</button>
                                <button type='button' class='btn btn m-1' data-bs-toggle='modal' data-bs-target='#RegisterModal'><i class='fa fa-fw fa-user'></i>Register</button>";
                                
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
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quia a sunt vitae rem, cupiditate nulla, non, amet molestias aspernatur deserunt fugiat nobis? Hic, unde delectus ea temporibus similique deleniti?
                                    </small>
                            </div>
                        </div>
                        <div class="carousel-item">
                             <img src="asset\istockphoto-157334256-612x612.jpg"class="d-block w-100" alt="2nd image">
                        </div>
                        <div class="carousel-item">
                            <img src="asset\istockphoto-173573801-612x612.jpg" class="d-block w-100" alt="3rd image">
                        </div>
                
                        
                    </div>
                </div>