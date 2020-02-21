<!DOCTYPE html>
<html>
<body>

<h1>Local db</h1>

<?php

// Setup local db connection details here
$con=mysqli_connect('localhost','DB_USERNAME','DB_PASSWORD');

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to Local/MySQL: " . mysqli_connect_error();
  }else {
  echo "Connected to Local/MySql DB";
  }

mysqli_close($con);
?>

</body>
</html>
