<!DOCTYPE html>
<html>
<body>

<h1>RDS Read Replica db</h1>

<?php

// Setup RDS connection details
// E.g. $con=mysqli_connect('myrds-rr.cle1covvccqa.us-east-1.rds.amazonaws.com:3306', 'root', 'password');

$con=mysqli_connect('RDS_RR_HOSTNAME', 'DB_USERNAME', 'DB_PASSWORD');

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to RDS Read Replica/MySQL: " . mysqli_connect_error();
  }else {
  echo "Connected to RDS Read Replica/MySql DB";
  }

mysqli_close($con);
?>

</body>
</html>
