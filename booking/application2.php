<?php
        //include connection file
        include_once("final.php");
		session_start();
        //select database
        mysqli_select_db($conn,"projectdb");
        if(isset($_POST['nextpage2']))
           { 
            $mband=$_POST['mband'];
            $psingers=$_POST['psingers'];
            $details_show=$_POST['detailsshow'];
            $req_date=$_POST['req_date'];
            $req_time=$_POST['req_time'];
            
            //insert data from checkbox about matter
            $chk="";  
            $checkbox1=$_POST['matter'];
            foreach($checkbox1 as $chk1)  
                { 
                    $chk .= $chk1.",";  
                }  
            //insert data from checkbox about traditional/speed rhythem
            $ch="";
            $check2=$_POST['musicalshow'];
            foreach($check2 as $ch1)  
                { 
                    $ch .= $ch1.",";  
                }  
            //insert data from checkbox about viewers of the function
            $checkb="";
            $viewers=$_POST['viewers'];
            foreach($viewers as $checkb1)  
                { 
                    $checkb .= $checkb1.",";  
                }  

            //insert data to the table booking_details
           /* $bookdata="INSERT INTO booking_details ( matter ,
            musical_show ,
            band ,
            singers ,
            guests ,
            audience ,
            date_application ,
            time_application) 
            VALUES('$chk','$ch','$mband','$psingers','$details_show','$checkb','$req_date','$req_time')";*/

            $bookdata="UPDATE booking_details SET matter='$chk',
            musical_show='$ch',
            band='$mband',
            singers='$psingers',
            guests='$details_show',
            audience='$checkb',
            date_application='$req_date',
            time_application='$req_time'";

            
            $book2=mysqli_query($conn,$bookdata);
			if(!$book2){
				die("Invalid query".mysqli_error($conn));
			}else
            {
				echo "data inserted to the table";	
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
        <h2>Details regarding the matter of application</h2>
        </div>


        <div class="form-group">
        <lable for="matterapply">Matter:</label><br>
        
        <input type="checkbox" name="matter[]" value="seminars" class="form-check-input">
        <label class="form-check-label" for="seminarslectures">Seminars/Lectures</label>
        
        <input type="checkbox" name="matter[]" value="stagedrama" class="form-check-input">
        <label class="form-check-label" for="stagedrama">Stage drama</label>

        <input type="checkbox" name="matter[]" value="musicalshow" class="form-check-input">
        <label class="form-check-label" for="musical">Musical show</label>

        <input type="checkbox" name="matter[]" value="celebrations" class="form-check-input">
        <label class="form-check-label" for="atc">Awards/Tributes/Celebrations</label>

        <input type="checkbox" name="matter[]" value="other" class="form-check-input">
        <label class="form-check-label" for="other">Other:</label>
        </div>

        
        <div class="form-group">
        <label for="nameapplicant">Musical Show:</label><br>

        <input type="checkbox" name="musicalshow[]" value="traditional" class="form-check-input">
        <label for="nameapplicant">Traditional:</label><br>

        <input type="checkbox" name="musicalshow[]" value="fastrhy" class="form-check-input">
        <label for="nameapplicant">Fast Rhythms:</label><br>
        </div>


        <label for="instruction">Spectators are not allowed to dance in the auditorium.If this is done,the security deposit will be canceled from the relevant concert.</label>
        
        <div class="form-group">
        <label for="mband">The band:</label>
        <input type="text" id="mband" name="mband" class="form-control"><br>
        </div>

        <div class="form-group">
        <label for="singers">Participating singers:</label>
        <input type="text" id="psingers" name="psingers" class="form-control"><br>
        </div>


        <div class="form-group">
        <label for="mband">Stage Plays/ Conferences/ Lectures/ Prizes Main / Awards / Festivals / Resource Donation/People running the program/group/Special guests:</label>
        <input type="text" id="detailsshow" name="detailsshow" class="form-control"><br>
        </div>


        <div class="form-group">
        <label for="nameapplicant">Viewers:</label><br>
        <label for="nameapplicant">Viewers:</label><br>

        <input type="checkbox" name="viewers[]" value="unistudents" class="form-check-input">
        <label for="nameapplicant">University students:</label><br>
    
        <input type="checkbox" name="viewers[]" value="schoolstudents" class="form-check-input">
        <label for="nameapplicant">School students:</label><br>
     
        <input type="checkbox" name="viewers[]" value="staff" class="form-check-input">
        <label for="nameapplicant">Institute staff:</label><br>
    
        <input type="checkbox" name="viewers[]" value="open" class="form-check-input">
        <label for="nameapplicant">open:</label><br>
        </div>

        <div class="form-group">
        <label for="singers">Required date:</label>
        <input type="date" id="req_date" name="req_date" class="form-control"><br>
        </div>

        <div class="form-group">
        <label for="singers">Required time:</label>
        <input type="time" id="req_time" name="req_time" class="form-control"><br>
        </div>

        <div class="text-center">
        <div class="form-group">
            <input type="submit" name="nextpage2" value="submit">
        </div>
        </div>

        <div class="form-group">
        <ul class="pagination">
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/applicationI1.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/applicationI1.php">1</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/application2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/application3.php">3</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/final/boot/application3.php">Next</a></li>
        </ul>
        

        </div>

        </div>
        </form>
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>