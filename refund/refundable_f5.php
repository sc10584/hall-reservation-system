<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.css">
   <?php
        include("conn.php");
        include_once("createtable.php")

        session_start();

        mysqli_select_db($sql,"projectdb");
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $message1_VC=$_POST["message1_VC"];
            
            
            $sign5=$_POST["sign5"];
            $sql6="select * from Refundtable where message1_VC='".$message1_VC."'AND sign5='".$sign5."')";
            $q6=mysqli_query($sql,$sql6);
        
            $row=mysqli_fetch_array($q6);
        
            
            $sql1=mysqli_query($sql,$sql7);
               
            if(!$sql1){
                die("Inavlid query".mysqli_error());
                }
                else { 
                echo "<h2>Refund Application </h2> <table border='1'>
                <tr>
                <th>Approved_or_Not</th>
                <th>VC_message1</th>
                
                
                </tr>";
                while($row = mysqli_fetch_array($sql1))
                 {
                 echo "<tr>";
                 echo "<td>" . $row['Vice Chancellor'] . "</td>";
                 echo "<td>" . $row['VC_A'] . "</td>";
                
                 

                }
                 echo "</table>";
                }
         }
                mysqli_close($sql);
                       
?>
</head>


</head>
</body>
   
   <div class="container p-5 my-5 bg-dark text-white"> 
      <form>
         <div class="row">
    <h5>
       I agree to pay the refundable deposit paid for the above program./I submit for approval to charge the amount estimated by the work engineer for damagees and pay the remaining amount. 
    </h5>
    <textarea name="message1_VC" rows="10" ></textarea>
    </div>
    <br><br>

    <form action="">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="sign5" name="sign5" value="something" checked>
        <label class="form-check-label" for="sign5">Vice Chancellor</label>
     

<span></span>
<br>
  
   
     
    <button type="submit" class="btn btn-primary"formaction="http://localhost/refund/refundable_f4.php">Back</button> 
    <input type="submit" class="btn btn-primary" value="Submit">
    
    </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
   </body>
    </html>