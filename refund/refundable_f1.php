<?php
        
        include("../verification/connection.php");
		//include_once("createtable.php");
        mysqli_select_db($sql,"project");

        session_start();
       // mysqli_select_db($sql,"projectdb");
       if(isset($_POST['nextpage1']))
        {
            $program=$_POST['program'];
            $held_date=$_POST['held_date'];
            $held_time=$_POST['held_time'];
            $institution=$_POST['institution'];
            $amount=$_POST['amount'];
            $payment_date=$_POST['payment_date'];

            $signd="";
            $depuity_register=$_POST['signdeputy'];
            foreach($depuity_register as $signd1)  
                { 
                    $signd .= $signd1."";  
                } 

            $rsign1="INSERT INTO refundablecharge_process(
            deputyRegister) 
            VALUES('$signd')";
            
            $refund1=mysqli_query($sql,$rsign1);
            if(!$refund1)
            {
                die("invalid query".mysqli_error($sql));
            }
            else
            {
                //echo"data inserted";
            }

            $refundid = mysqli_insert_id($sql);
            $_SESSION['refundid'] = $refundid;
        }                          
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>  

<body>
        <div class="container p-5 my-5 bg-dark text-white">
            <h1>
            Refund Application 
            </h1>
            <h2>
            After every program held at Rabindranath Tagore Memorial Hall,the concerned parties should fill up the following form and send it to the Deputy registrar/ General Control.
            </h2>

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                <div class="form-group">
                <label for="program">Program:</label>
                <input type="text"  id="program" name="program" class="form-control" required>
                </div>    
            
                <div class="form-group">
                <label for="date">Date:</label>
                <input type="date"   size="30" class="form-control" min="2022-01-01" max="2025-01-01" name="held_date" required>
                </div>
            
                <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" class="form-control" name="held_time" required><br>
                </div>
            
                <div class="form-group">
                <label for="institution">Managed Institution:</label>
                <input type="text" id="institution" class="form-control" name="institution" required><br>
                </div>
            
                <div class="form-group">
                <label for="amount">Deposit Amount Paid:</label>
                <input type="text" id="amount"class="form-control"  name="amount" required><br>
                </div>
            

                <div class="form-group">
                <label for="paid">Date Of Payment:</label>
                <input type="date"   size="30" class="form-control" min="2022-01-01" max="2025-01-01" name="payment_date" required>        
                </div>


                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="sign1" name="signdeputy[]" value="approved">
                <label class="form-check-label" for="sign1">Deputy Registrar</label>
                </div> 

            <div class="text-center">
            <div class="form-group">
            <input type="submit" name="nextpage1" value="Submit">
            </div>
            </div>
            <!--<button type="submit" class="btn btn-primary" formaction="http://localhost/refund/refundable_f2.php">Next</button> -->
            
        </form>
        </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>