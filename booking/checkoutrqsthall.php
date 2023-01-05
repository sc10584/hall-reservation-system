<?php
include_once("../verification/connection.php");
mysqli_select_db($sql,"project");
session_start();
$customerid = $_SESSION['customer_id'];
$selectletter = "SELECT * FROM requestletter_info WHERE customer_id =$customerid";

$qryselectletter = $sql->query($selectletter);


$selectcustomername = "SELECT * FROM customer WHERE customer_id =$customerid";
$qryforname = $sql->query($selectcustomername);

if($qryforname)
{
    while($row = $qryforname -> fetch_assoc())
    {
        $cusfname = $row['first_name'];
        $cuslname = $row['last_name'];
        $custelephone = $row['telephone_num'];
    }
}

else
{

}

$_SESSION['cusfname'] = $cusfname;
$_SESSION['cuslname'] = $cuslname;
$_SESSION['custelephone'] = $custelephone;


?>

<!DOCTYPE html>
<html>

<title>

</title>

<head>
<meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php
        if($qryselectletter->num_rows > 0)
        {  
            while($row = $qryselectletter->fetch_assoc())
            {
                $customeraddress = $row['senderAddress'];
                $_SESSION['cusaddress'] = $customeraddress;

            ?>
            <div class="row">
                <div class="col-12">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="card">
                            <h5 class="card-header"><?php echo $row['eventName'] ?></h5>

                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Applicant Name</th>
                                            <td><?php echo $cusfname." ".$cuslname ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Event Date</th>
                                            <td><?php echo $row['eventDate'] ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Event Time</th>
                                            <td><?php echo $row['eventTime'] ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Request Letter Send Date</th>
                                            <td><?php echo $row['sendDate'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <a href="application1.php" class="btn btn-primary float-end">Book Now</a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            }   
        }

        else
        {
            ?>

            You have not send your request to the vice chansller until now or your request letter has not concerned by the vice chancller until now!
        <?php
        }
        ?>
        
    </div>
</body>

</html>