<!DOCTYPE html>
<?php

// Add ElastiCache/Memcached server
$mc = new Memcached();

// Setup memcached endpoint below
// E.g. $mc->addServer('mycache.ls62hu.cfg.use1.cache.amazonaws.com', 11211);
$mc->addServer('MEMCACHED_HOSTNAME', 11211);

// Set value for a key
$mc->set("somekey", "somevalue");

// Get value for the key
$valuefromcache = $mc->get("somekey");

//succesful connect if value from cache is the same as originally set
$message = 'Connection to Memcached was '.($valuefromcache == 'somevalue' ? 'successful!' : 'not successful.');

?>


<html>
<body>

<h1>ElastiCache/Memcached</h1>

<?php echo $message ?>

</body>
</html>
