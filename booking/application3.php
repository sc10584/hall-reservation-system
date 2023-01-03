<?php
        //include connection file
        include_once("final.php");
        session_start();
        //select database
        mysqli_select_db($conn,"projectdb");
        if(isset($_POST['nextpage3'])){
			
            $lightning=$_POST['lightning'];
            $sound=$_POST['sound'];
            $generators=$_POST['generators'];
            $decorations=$_POST['decorations'];
            $tickets=$_POST['ticket'];
            $date_submit=$_POST['date_submit'];

            //insert data from checkbox about security guard for the function
            $checkd="";
            $defence=$_POST['defence'];
            foreach($defence as $checkd1)  
                { 
                    $checkd .= $checkd1.",";  
                } 

            /*insert data from checkbox about agreement sentence in the application
            $agreement="";
            $agree=$_POST['agree'];
            foreach($agree as $agreement1)  
                { 
                    $agreement .= $agreement1.",";  
                }  */

            //insert data to the table booking_details

            $bookdata="UPDATE booking_details SET lightning='$lightning',
            sound='$sound',
            generators='$generators',
            decorations='$decorations',
            tickets='$tickets',
            controlling_sec='$checkd',
            date_submit='$date_submit',
            agreement='$agreement'";

			$book3=mysqli_query($conn,$bookdata);
			if(!$book3){
				die("Invalid query".mysqli_error());
			}else
            {
				echo "data inserted successfully";	
			}
		}
    ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>

        <div class="container mt-5 p-5 bg-dark text-white y-5">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" id="userform">
        
        <div class="text-center">
        <h2>Details regarding outsourced equipment and services</h2>
        </div>
        
        <div class="form-group">
        <lable for="lightning">Stage lightning:</label>
        <input type="text" id="lightning" name="lightning" class="form-control"><br>
        </div>
        
        <div class="form-group">
        <label for="nameapplicant">Stage sound controling:</label>
        <input type="text" id="sound" name="sound" class="form-control"><br>
        </div>
         
        <div class="form-group">
        <label for="nic">Electric generators:</label>
        <input type="text" id="generators" name="generators" class="form-control"><br>
        </div>
    
        <div class="form-group">
        <label for="address">Stage decorations:</label>
        <input type="text" id="decorations" name="decorations" class="form-control"><br>
        </div>

        <div class="form-group">
        <label for="phonenumber">Ticket sales at the auditorium:</label><br>
        <input type="text" id="ticket" name="ticket" class="form-control">
        </div>

        <div class="form-group">
        <label for="phonenumber">Security for the function:</label><br>
        <input type="checkbox" name="defence[]" value="securityex" class="form-check-input">
        <label class="form-check-label" for="externalsecurity">externally</label>
        <input type="checkbox" name="defence[]" value="securityuni" class="form-check-input">
        <label class="form-check-label" for="securityuni">security division of the university</label>
        </div>
        
        <input type="checkbox" name="agree[]" value="agree" class="form-check-input" checked>
        I agree to avail the Rabindranath Tagore Memorial Auditorium on payment of the fees charged by Ruhunu University for conducting the above program subject to the conditions or rules to be observed while using the Rabindranath Tagore Memorial Hall.


        <div class="form-group">
        <div class="text-center">
            <input type="submit" name="nextpage3" value="submit">
        </div>
        </div>

        <div class="form-group">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/applicationI2.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/applicationI1.php">1</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/application2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/application3.php">3</a></li>
        </ul>

        </form>
        </div>

       
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>