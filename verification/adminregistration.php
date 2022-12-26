<?php 

    require ('connection.php');
    mysqli_select_db($sql,"project");
    session_start();
?>
<html lang="en">
<head> <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
   
    </head>
    <body>

    <div class="body">
    <div class="form">
        <div class="h2">
            <span class="title">Registration</span>
            
        </div>
        
    <form action="registration.php"method="POST">
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Enter your name" required>
            <label for="floatingInput">Name</label>
            
    
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
           
        
        </div>

        <div class="form-floating mb-3">
            <input type="tel" name="telnum" class="form-control" id="floatingInput" placeholder="Enter your Tele-Phone Number " required>
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
        <div class="">
        <label for=role_id>admin type</label>
            <select name="role_id" id="role_id">
            <option value="2">vc</option>
            <option value="3">eng</option>
            <option value="4">to</option>
            <option value="5">reg</option>
            <option value="6">cse</option>
  </select>

       
         <div class="input field button">
              <input type="submit" name="registration" value="register">
         </div>
        
       
</div>
</body>
</html>
