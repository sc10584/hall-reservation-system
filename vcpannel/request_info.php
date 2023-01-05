<?php
include("connection.php");
mysqli_select_db($sql,"project");
                //$fetctdata='SELECT * FROM request letter info table';
 $result = mysqli_query($sql, "SELECT * FROM requestletter_info");
                // $sql->query('SELECT * FROM request letter info table');


if(!$result)
{
    die("Invalied query");
}
//read data of database
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

    
  .switch {
  position: relative;
  display: inline-block;
  width: 80px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: red;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  right: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: green;
  
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(46px);
  -ms-transform: translateX(46px);
  transform: translateX(46px);
  
}

/* Rounded sliders */
.slider.round {
  border-radius: 500px;
}

.slider.round:before {
  border-radius: 500%;
}



  </style>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="index.php">Home</a></li>
        <li><a href="">Gender</a></li>
        <li><a href="">Geo</a></li>
      </ul><br>
    </div>
    <br>
    <div class="col-sm-9">

</head>
<body>

<h2>Reservation Approval</h2>


    <?php


    while ($row = $result->fetch_assoc()) {

      ?>                      
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Senders' Address</th>
        <th>Letter Conternt</th>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Event Time</th>
        <th>Sign Off</th>
      </tr>
    </thead>
    <tbody>
      <tr>
                                    <td><?php echo $row['senderAddress']; ?></td>
                                    <td><?php echo $row['letterContent']; ?></td>
                                    <td><?php echo $row['eventName']; ?></td>
                                    <td><?php echo $row['eventDate']; ?></td>
                                    <td><?php echo $row['eventTime']; ?></td>
                                    <td><?php echo $row['signOff']; ?></td>
                                    
                                    
                       <input type="hidden" name="latterid" value=<?php echo $row['letterNo']; ?>>

                        <td><input type='submit' class='btn btn-info' name='submit' value='submit'>
                                    </td>
                                    
                                   </tr>
                                   </tbody>
            </table>
                                  </form>
                                  <?php


                                 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $letterid = $_POST['latterid'];
      echo "$letterid";
      $sql6 = "UPDATE requestletter_info set is_approved ='1' where letterNo = $letterid";
      $q6 = mysqli_query($sql, $sql6);

      if ($q6) {
        echo "approved";
      } else {
        echo "error";
      }

    }
                        ?>
                        

                    
                

        </body>
</html>