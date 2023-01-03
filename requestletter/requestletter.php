
<?php
        include("../verification/connection.php");
		//include_once("createtable.php");
        mysqli_select_db($sql,"project");

        session_start();
        $customerid = $_SESSION['customer_id'];

        
        if(isset($_POST['submit'])){
			
			$sendersadd=$_POST['sendersadd'];
			$lettercontent=$_POST['lettercontent'];
			$eventname=$_POST['eventname'];
			$eventdate=$_POST['eventdate'];
			$eventtime=$_POST['eventtime'];
			$signoff=$_POST['signoff'];
		
		

			$sql6="INSERT INTO RequestLetter_info(senderAddress, letterContent, eventName, eventDate, eventTime, signOff, customer_id) VALUES('$sendersadd','$lettercontent','$eventname','$eventdate','$eventtime','$signoff',$customerid)";
			$q6=mysqli_query($sql,$sql6);

			if(!$q6){
				die("Invalid query".mysqli_error());
			}else{
				#echo "<h1>For requesting permission to reserve the Rabindranath Tagore Memorial Auditorium, University of Ruhuna</h1>";
				
			}
		}

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Request letter to Vice Chancellor</title>

    <link rel="">
	
    
    
</head>

<body>
    <div class="container-fluid p-5 my-0 bg-dark text-white">
        <h1>For requesting permission to reserve the Rabindranath Tagore Memorial Auditorium, University of Ruhuna</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" id="userform">
            <div class="row">
             <div class="col-3">
            <textarea class="form-control" id="sendersadd" name="sendersadd" rows="5" placeholder="type your address here" form="userform"></textarea>
             </div>
             </div>
             <br>
            <div class="col-3">
                Vice Chancellor,<br>
                University of Ruhuna.<br><br>
                Dear Sir,
            </div>
            
           <p><u>For requesting permission to reserve the Rabindranath Tagore Memorial Auditorium.</u></p>
           <textarea id="" name="lettercontent" rows ="10" cols="100" form="userform" class="form-control"></textarea><br>
           <label>Event Name: </label> <input type="text" name="eventname" class="form-control"><br><br>
           <label>Event Date: </label> <input type="date" name="eventdate" class="form-control"><br><br>
           <label>Event Time: </label> <input type="time" name="eventtime" class="form-control"><br><br>
           
           <textarea id="signoff" name="signoff" rows="5" cols="35" form="userform">Sincerly,</textarea><br>
           
           <input type="submit" name="submit" class="btn btn-dark"></button>
        </form>
    </div>

</body>
</html>
