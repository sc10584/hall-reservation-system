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
            <?php 
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                                echo "<i class='fa fa-fw fa-user'></i>".$_SESSION['username']." you are logged in! "."<a href='logout.php' class='link-dark'>Logout</a>";
                                //<a href='booking.php' class='nav-link'>RESERVATION</a>";
                            
                            }else{
                                //echo "<ul class><li><a class='nav-link' data-bs-toggle  ='modal' data-bs-target='#loginModal'>Login</a></li></ul>";
                                #<button type='button' class='btn btn m-1' data-bs-toggle='modal' data-bs-target='#RegisterModal'>Register</button>
                                
                                #<a href="" role="button" data-toggle="modal" data-bs-target="#loginModal" data-parent="#accordion">ji</a>";
                                
                            }
                         ?>
            <div class=>
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
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class='nav-link' href="#"  data-bs-toggle  ='modal' data-bs-target='#loginModal'><i class="fa fa-fw fa-user"></i>Login</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href="#" data-bs-toggle  ='modal' data-bs-target='#RegisterModal'><i class="fa fa-fw fa-user"></i>Register</a>
                            </li>
                            
                    
                    
                    <form class="justify-content-end">
                        
                    </form>
                    </div>
                    </ul>
                </nav>
                
                <div class="container-fluid p-0">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height:700px;">
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


<!--review card-->
<div class="" id="review_content"></div>

<script>
 //jquery code part
$(document).ready(function(){

	var rating_data = 0;  //at first we have to asign variable rating-data value to 0

    $('#add_review').click(function(){

        $('#review_modal').modal('show');  // when click the review button function call the bootstrap modal to popout 

    });

    $(document).on('mouseenter', '.submit_star', function(){ //when mouse hover the stars the stars colors will be change

        var rating = $(this).data('rating'); //asign variable rating  for fetch data attribute rating value and store it

        reset_background();

        for(var count = 1; count <= rating; count++) // loop for get count for change star background color
        {

            $('#submit_star_'+count).addClass('text-warning'); //change stars color to yellow from 1 to count value

        }

    });

    function reset_background() //when mouse move other direction of the stars this function will work
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light'); //add color light to stars when mouse moving right to left

            $('#submit_star_'+count).removeClass('text-warning'); // remove yelow color of stars when mouse moving backword 

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){  //when mouse leave from stars this code will execute 

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light'); // when mouse leave for specified star and the change stars colors form one to that star

            $('#submit_star_'+count).addClass('text-warning'); // when mouse leave for specified star and the change stars colors form one to that star
        }

    });

    $(document).on('click', '.submit_star', function(){  //when click the star icon get the rating value
                                                        
        rating_data = $(this).data('rating');           // and store that value in rating-data variable

    });

    $('#save_review').click(function(){  //when user click submit button this code will execute

        var user_name = $('#user_name').val(); // user name input text value asign to the user_name local variable

        var user_review = $('#user_review').val(); // user review textarea value asign to the user_review local variable

        if(user_name == '' || user_review == '') // if any field is empty show alert message
        {
            alert("Please Fill Both Field");
            return false;
        }
        else  //when both fields are entered this ajax code will be executed
        {
            $.ajax({
                url:"submit_rating.php", //define url to send data
                method:"POST", //define method
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review}, //define what are data should sent
                success:function(data) //if this data completly send to the server then this code will execute
                {
                    $('#review_modal').modal('hide'); //when click the submit button if all fields filled the hide the model

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"../review/submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",   //review data in json format
            success:function(data)  //if ajax request completed successfully and it will retrive data from json format
            {
                $('#average_rating').text(data.average_rating); //show average rating value on web page
                $('#total_review').text(data.total_review);   //show total review value on web page

                var count_star = 0;  //to show average rating on star icon

                $('.main_star').each(function(){
                    count_star++;                   //in every loop count_star value increament
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');  //change stars color until they were equal to the average value
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);  //calculate total number of five ratings and show in front of the progress bar

                $('#total_four_star_review').text(data.four_star_review);  //same as upper row

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%'); //change the coor of width of progress bar based on average five star review

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)  //all reviews fetch from database
                {
                    var html = '';
                    
                    html += '<div class="row mb-3 mt-3">';
                    for(var count = 0; count < 1; count++)
                    {

                        html += '<div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">';
                            html += '<div class="carousel-inner ">';
                               html += '<div class="carousel-item active">';
                                    html += '<div class="card">';

                                    html += '<div class="card-body">';

                                    html += '<div class="card-title"><b>'+data.review_data[0].user_name+'</b></div>';


                                        for(var star = 1; star <= 5; star++)
                                        {
                                            var class_name = '';

                                            if(data.review_data[0].rating >= star)
                                            {
                                                class_name = 'text-warning';
                                            }
                                            else
                                            {
                                                class_name = 'star-light';
                                            }

                                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                                        }

                                        html += '<br />';

                                        html += data.review_data[0].user_review;
                                        html += '<br />';
                                        html += '<br />';
                                        html += '<a href="#" class="btn btn-primary">Go somewhere</a>';

                                        html += '</div>';

                                        //html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                                        html += '</div>';

                                        html += '</div>';

                                
                               html += '<div class="carousel-item">'; //carousel-item
                                html += '<div class="card">';

                                html += '<div class="card-body">';

                                    html += '<div class="card-title"><b>'+data.review_data[1].user_name+'</b></div>';


                                        for(var star = 1; star <= 5; star++)
                                        {
                                            var class_name = '';

                                            if(data.review_data[1].rating >= star)
                                            {
                                                class_name = 'text-warning';
                                            }
                                            else
                                            {
                                                class_name = 'star-light';
                                            }

                                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                                        }

                                        html += '<br />';

                                html += data.review_data[1].user_review;
                                html += '<br />';
                                html += '<br />';
                                html += '<a href="#" class="btn btn-primary">Go somewhere</a>';

                                html += '</div>';

                                //html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                                html += '</div>';

                                html += '</div>';

                           html += '</div>';
                            
                           html += '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">';
                               html += '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                               html += '<span class="visually-hidden">Previous</span>';
                           html += '</button>';
                            
                           html += '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">';
                              html +=  '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                               html += '<span class="visually-hidden">Next</span>';
                            html += '</button>';
                        
                        html +='</div>';



                    }

                    $('#review_content').html(html);
                    
                }
            }
        })
    }

});

</script>
<p class="d-flex justify-content-center align-items-center">
          <span class="me-3">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=university of ruhuna matara rabindranath auditorium&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">

                    </iframe>
                    <a href="https://piratebay-proxys.com/">Piratebay</a>
                    
                </div>
                <style>.mapouter{position:relative;text-align:right;width:1080px;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:660px;height:200px; padding-left:6px;}.gmap_iframe {width:1080px!important;height:200px!important;}</style>
                    
            </div>
        </span>
        </p>

<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #706D6C;">
    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <address class="row g-color-white-opacity-0_8 mb-0">
      <div class="col-sm-6 col-md-3 g-brd-right--md g-brd-white-opacity-0_3 g-mb-60 g-mb-0--md">
        <i class="icon-line icon-map d-inline-block display-5 g-color-primary g-mb-25"></i>
        <p class="small text-uppercase g-mb-0"><i class="fa fa-map-marker" style="font-size:12px"></i></br>Address</p>
        <strong>Orange California, US</strong>
      </div>

      <div class="col-sm-6 col-md-3 g-brd-right--md g-brd-white-opacity-0_3 g-mb-60 g-mb-0--md">
        <h5 class="small text-uppercase g-mb-5"><i class='fas fa-phone-square-alt' style='font-size:12px'></i></br>Phone number</h4>
        <strong><a href="tel:6031112298">603-111-2298</a></strong>
      </div>

      <div class="col-sm-6 col-md-3 g-brd-right--md g-brd-white-opacity-0_3 g-mb-60 g-mb-0--md">
        <i class="icon-envelope d-inline-block display-5 g-color-primary g-mb-25"></i>
        <h5 class="small text-uppercase g-mb-5"><i class="fa fa-envelope" style="font-size:12px"></i></br>Email</h4>
        <a class="g-color-white-opacity-0_8" href="mailto:hello@unify-gym.com">
          <strong>info@htmlstream.com</strong></a>
      </div>

      <div class="col-sm-6 col-md-3">
        <i class="icon-earphones-alt d-inline-block display-5 g-color-primary g-mb-25"></i>
        <h5 class="small text-uppercase g-mb-5"><i class="fa fa-fax" style="font-size:12px"></i></br>Fax</h4>
        <strong>100 302 2302</strong>
      </div>
    </address>  
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a></br>
      

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
                            <a href="#resetpassowordmodal" class="text">Forget password</a>
                    </div>
                    <div class="input field button">
                        <input type="submit" name="login" value="Login Now">
                    </div>
                </form>
                    <div class="login-signup">
                        <span class="text">Not a member</span>
                        <a href="#RegisterModal" class="text signup-link">Sign up</a>
                    </div>
            </div>
        </div>
    </div>
</div> 

    <script src="script.js"></script>
                   
    <div class="modal fade" id="RegisterModal">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="RegisterModalLabel">Register</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    
            <div class="form">
                <form action="registration.php"method="POST">
                    <div class="form-floating ">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Enter your name" required>
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating ">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating ">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Jhon" name="first_name" required>
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating ">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Wane" name="last_name" required>
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <div class="form-floating ">
                        <input type="tel" name="telnum" class="form-control" id="floatingInput" placeholder="Enter your Tele-Phone Number " required>
                        <label for="floatingInput">TelePhone Number</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" required id="floatingPassword" placeholder="Create Your Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating">
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
    </div>
</div>

<div class="modal fade" id="resetpassowordmodal">
    <div class="modal-dialog">
            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="resetpassowordmodalLabel">Forgot Password<</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                <div class="form">
                
                
                    <form action="registration.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                                <label for="floatingInput">Enter Your Email</label>
                             </div>
                    
                    
                        <div class="input field button">
                            <input type="submit" value="Send Reset Link">
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">Not a member</span>
                        <a href="#RegisterModal" class="text signup-link">Sign up</a>
                    </div>


                </div>
            </div>
    </div>
</div>
      






</body>
</html>