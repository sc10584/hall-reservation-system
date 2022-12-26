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
    

</head>
<body class="bg-dark">
    <div class="container-fluid mt-3">
        <div class="card" style="height:590px;">
            <div class="card-header text-center">
                <h1>Rabindranath Tagore Auditorium</h1>
            </div>
            <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                echo $_SESSION['email']." - <a href='logout.php' class='btn btn'>LOGOUT</a>";
                            }else{
                                echo "<button type='button' class='btn btn m-1' data-bs-toggle  ='modal' data-bs-target='#loginModal'>Login</button>
                                <button type='button' class='btn btn m-1' data-bs-toggle='modal' data-bs-target='#RegisterModal'>Register</button>";
                            }
                         ?>

                    </form>
                </nav>
            </div>
                    
            <h1>clerk page</h1>
</body>
                        
</html>