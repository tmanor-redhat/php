<?php
print "Hello, World! php version is " . PHP_VERSION . "\n";

sleep(10);
print "Calling 'myapp' page...\n";

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://myapp-helloworld-s2i-php.apps.tmanor.quicklab.pnq2.cee.redhat.com");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
?>
