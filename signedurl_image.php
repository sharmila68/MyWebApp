<html>
<body>

<?php

//Load aws-sdk
require __DIR__.'/vendor/autoload.php';

$cloudFront = new Aws\CloudFront\CloudFrontClient([
    'region'  => 'us-east-1',
    'version' => '2014-11-06'
]);

//set expiry of signed URL to 5 minutes
$expires = time() + 300;

// Create a signed URL for the resource using the canned policy
$signedUrlCannedPolicy = $cloudFront->getSignedUrl([

// specify the cloudfront URL of your image, e.g. https://d1sw5zd4zl7a4f1.cloudfront.net/my_image.png
    'url'         => 'FULL_URL_OF_IMAGE_VIA_CLOUDFRONT',
    'expires'     => $expires,

// specify path to the private key file on your EC2 instance, e.g. /home/ubuntu/cf-private-key.pem
    'private_key' => 'PATH_TO_PRIVATE_KEY_FILE_ON_EC2_SERVER',

// specify the key pair id, e.g. APKAJ63NC4PRMGWKG6VQ
    'key_pair_id' => 'KEY_PAIR_ID'
]);

?>

<h1>Signed CloudFront Image</h1>

<img src=<?php echo $signedUrlCannedPolicy; ?> />


</body>
</html>
