<!DOCTYPE html>
<html>
<body>

<?php
echo "<h1>Hello World!</h1><br/><br/>";
?>


Session pages
<p><a href="/session.php">Local (EC2) Session</a></p>
<p><a href="/dyn_session.php">DynamoDb Session</a></p>

Image pages
<p><a href="/image.php">Image in EBS vol</a></p>
<p><a href="/s3_image.php">Image in S3</a></p>
<p><a href="/cloudfront_image.php">Image via CloudFront</a></p>
<p><a href="/signedurl_image.php">Signed URL image (CloudFront)</a></p>

Database pages
<p><a href="/localdb.php">Local (EC2) db</a></p>
<p><a href="/rds.php">RDS</a></p>
<p><a href="/rds_rr.php">RDS Read Replica</a></p>
<p><a href="/memcached.php">Memcached</a></p>


</body>
</html>
