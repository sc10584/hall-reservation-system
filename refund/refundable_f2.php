<?php
    
    include_once("../verification/connection.php");
    mysqli_select_db($sql,"project");

    session_start();
    $_SESSION['refundid'];
    $id = $_SESSION['refundid'];

        if(isset($_POST['2nd']))
        {
            $message1_sd = $_POST['message1_sd'];
            $message2_sd = $_POST['message2_sd'];

            $signc="";
            $signcso=$_POST['signcso'];
            foreach($signcso as $signc1)  
                { 
                    $signc .= $signc1."";  
                } 

            $rsign2="UPDATE refundablecharge_process SET SD_A='$message1_sd',SD_B='$message2_sd',cheif_security_officer='$signc' WHERE refundRecharge_id = $id";

            $refund2=mysqli_query($sql,$rsign2);
            if(!$refund2)
            {
                die("invalid query".mysqli_error($sql));
            }
            else
            {
                //echo"data inserted";
            }

    }                 
?> 


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">   
</head>
<body>
    <div class="container p-5 my-5 bg-dark text-white">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" id="userform">
    <div class="text-center">
    <h2>To be completed by the security department</h2>
    </div>

    <div class="form-group">   
    <label for="message"><h5>No Losses have been reported during and after the above program</h5></label>
    <textarea class="form-control" name="message1_sd" rows="10" cols="100" form="userform"></textarea>
    </div>

    <div class = "form-group">
    <label for="damages"><h5>Attatched/ Not Attatched to the reported damages</h5></label>
    <textarea class="form-control" name="message2_sd" rows="10" cols="100" form="userform" ></textarea>
    </div>

    <div class="form-group">
    <label class="form-check-label" for="signcso">Cheif Security Officer</label>
    <input type="checkbox" class="form-check-input" id="signcso" name="signcso[]" value="approved">
    </div>

        <div class="text-center">
        <div class="form-group">
        <input type="submit" name="2nd" id="2nd" value="submit">
        </div>
        </div>

    </form>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
