<?php
        include_once("../verification/connection.php");
        mysqli_select_db($sql,"project");
    
        session_start();
        $_SESSION['refundid'];
        $id = $_SESSION['refundid'];



        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $message1_WE=$_POST['message1_WE'];
            $RS=$_POST['RS'];
            $message2_WE=$_POST['message2_WE'];
            $date_WE=$_POST['date_WE'];
            $sign4=$_POST['sign4'];
            

            $rsign4="UPDATE refundablecharge_process SET WE_A='$message1_VT',
            WE_B='$message2_VT', price='$signv' date= WHERE refundRecharge_id = $id";

            $refund2=mysqli_query($sql,$rsign3);
            if(!$refund2)
            {
                die("invalid query".mysqli_error($sql));
            }
            else
            {
                echo"data inserted";
            }

        }
         
                       
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">

    
</head>

</head>
<body>
    <div class="container p-5 my-5 bg-dark text-white">  
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" id="userform">
    
    <h2>To be completed by Working Engineer</h2>
    
    <div class="form-group">
    <label for="security"><h5>Any loss reported/not related to the above program.</h5></label>
    <textarea class="form-control" name="message1_WE" rows="10" cols="100" form="userform"></textarea>
    </div>

    <div class="form-group">
    <label for="security"><h5>I recommend to charge a fee of Rs.</h5></label>
    <textarea class="form-control" name="RS" rows="5" cols="100" form="userform"></textarea>
    </div>

    <div class="form-group">
    <label for="security"><h5>for compensation of the damages mentioned above. The cost estimate is attatched.</h5></label>
    <textarea class="form-control" name="message2_WE" rows="10" cols="100" form="userform"></textarea>
    </div>
    <br><br>


    <label for="date">Date:</label>
    <input type="date" size="30" class="form-control" min="2022-01-01" max="2025-01-01" name="date_WE"><br><br>


        <div class="form-group">
          <input type="checkbox" class="form-check-input" id="sign4" name="sign4[]" value="something" require>
          <label class="form-check-label" for="sign4">Working Engineer</label><br><br>
        </div>
   
    <!--<button type="submit" class="btn btn-primary" formaction="http://localhost/refund/refundable_f3.php"> Back</button> 
    <button type="submit" class="btn btn-primary" formaction="http://localhost/refund/refundable_f5.php"> Next</button> -->

        <div class="text-center">
            <div class="form-group">
            <input type="submit" name="nextpage4" value="Submit">
            </div>
        </div>

    </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
    