<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


mysqli_select_db($conn,"projectdb");
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS booking_details(
booking_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_company VARCHAR(255) NULL,
name_applicant VARCHAR(255) NULL,
nic_applicant VARCHAR(255) NULL,
address_applicant VARCHAR(255) NULL,
mobile_applicant INT(10) NULL,
landline_applicant INT(10) NULL,
email_applicant VARCHAR(255) NULL,
matter VARCHAR(255) NULL,
musical_show VARCHAR(255) NULL,
band VARCHAR(255) NULL,
singers VARCHAR(255) NULL,
guests VARCHAR(255) NULL,
audience VARCHAR(255) NULL,
date_application DATE  NULL,
time_application TIME NULL,
lightning VARCHAR(255) NULL,
sound VARCHAR(255) NULL,
generators VARCHAR(255) NULL,
decorations VARCHAR(255) NULL,
tickets VARCHAR(255) NULL,
controlling_sec VARCHAR(255) NULL,
date_submit DATE NULL)";

if (mysqli_query($conn, $sql)) {
  echo "Table booking details created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

?>