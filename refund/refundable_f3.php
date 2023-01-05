
    <?php
        include_once("../verification/connection.php");
        mysqli_select_db($sql,"project");
    
        session_start();
        $_SESSION['refundid'];
        $id = $_SESSION['refundid'];



        if(isset($_POST['nextpage3']))
        {
            $message1_VT=$_POST['message1_VT'];
            $message2_VT=$_POST['message2_VT'];
            
            $signv="";
            $signvt=$_POST['sign3'];
            foreach($signvt as $signv1)  
                { 
                    $signv .= $signv1."";  
                } 

            $rsign3="UPDATE refundablecharge_process SET VT_A='$message1_VT',
            VT_B='$message2_VT', audioVisual_technicalOfficer='$signv' WHERE refundRecharge_id = $id";

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
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
    <div class="container p-5 my-5 bg-dark text-white">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" id="userform">
    <h2>To be completed by Audio Visual Technical Officer</h2>


    <div class="form-group">
    <label for="security"><h5>I confirm/not confirm that the losses reported by the Security Agency are during the program period.</h5></label>
    <textarea class="form-control" name="message1_VT" rows="10" cols="100" form="userform"></textarea>
    </div>

    <div class="form-group">
    <label for="issues"><h5>In addition,I observed technical losses./Description attatched./Not observed.</h5></label>
    <textarea class="form-control" name="message2_VT" rows="10" cols="100" form="userform"></textarea>
    </div>
    
        <div class="form-group">
          <input type="checkbox" class="form-check-input" id="sign3" name="sign3[]" value="something">
          <label class="form-check-label" for="sign3">Audio Visual Technical Officer</label>
        </div>

<br>
    

    
    <!-- <button type="submit" class="btn btn-primary" formaction="http://localhost/refund/refundable_f2.php">Back</button>
     <button type="submit" class="btn btn-primary" formaction="http://localhost/refund/refundable_f4.php">Next</button> -->

        <div class="text-center">
            <div class="form-group">
            <input type="submit" name="nextpage3" value="Submit">
            </div>
        </div>
    
    </form>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
