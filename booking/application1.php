<?php
        //include connection file
        include_once("../verification/connection.php");
        //select database
        mysqli_select_db($sql,"project");

        session_start();
        $_SESSION['cusfname'];
        $_SESSION['cuslname'];
        $_SESSION['cusaddress'];
        $_SESSION['custelephone'];

        if(isset($_POST['nextpage1']))
        {
            $namecompany=$_POST['namecompany'];
            $nameapplicant=$_POST['nameapplicant'];
            $nicnum=$_POST['nicnum'];
            $address=$_POST['address'];
            $landnum=$_POST['landnum'];
            $mobilenum=$_POST['mobilenum'];
            $email=$_POST['email'];

            //insert data to the table booking_details
            $bookdata="INSERT INTO booking_details(name_company,
            name_applicant,
            nic_applicant,
            address_applicant,
            mobile_applicant,
            landline_applicant,
            email_applicant) 
            VALUES('$namecompany','$nameapplicant','$nicnum','$address',$mobilenum,'$landnum','$email')";

			$book1=mysqli_query($sql,$bookdata);
            if(!$book1)
            {
				die("Invalid query".mysqli_error($sql));
			}else
            {
				//echo "data inserted to the table";	
                $_SESSION['bookingid'] = mysqli_insert_id($sql);
                
			}
		}
        

    ?>

<!DOCTYPE html>

    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    
    </head>
    <body>

        <div class="container mt-5 p-5 bg-dark text-white ">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" id="userform">
        
        <div class="text-center">
        <h1>Booking Application of Rabindranath Tagore Memorial Auditorium University of Ruhuna</h1>
        <h2>Details of the organization or individual doing the work</h2>
        </div>

        <div class="form-group">
        <lable for="namecompany">Name of the Company:</label>
        <input type="text" id="namecompany" name="namecompany" class="form-control"><br>
        </div>
        
        <div class="form-group">
        <label for="nameapplicant">Name of the Applicant:</label>
        <input type="text" id="nameapplicant" name="nameapplicant" class="form-control" value = "<?php echo $_SESSION['cusfname']." ".$_SESSION['cuslname'] ?>"><br>
        </div>
         
        <div class="form-group">
        <label for="nic">NIC Number:</label>
        <input type="text" id="nicnum" name="nicnum" class="form-control"><br>
        </div>
    
        <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="form-control" value="<?php echo $_SESSION['cusaddress'] ?>"><br>
        </div>

        <div class="form-group">
        <label for="phonenumber">Phone Number:</label><br>
       
        <div class="col-4">
        <label for="landnum">Landline Number:</label>
        <input type="tel" id="landnum" name="landnum" class="form-control">
        
        <label for="mobilenum">Mobile Number:</label>
        <input type="tel" id="mobilenum" name="mobilenum" class="form-control" value ="<?php echo $_SESSION['custelephone'] ?>">
        </div>
        
        <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control"><br>
        </div>

        <div class="text-center">
        <div class="form-group">
        <input type="submit" name="nextpage1" value="Submit">
        </div>
        </div>

        
        <div class="form-group">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="http://localhost/project/booking/application1.php">1</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/project/booking/application2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/project/booking/application3.php">3</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/project/booking/application2.php">Next</a></li>
        </ul>
        

        </div>
        </div>
 
        </form>
        </div>
         </div>
         <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>