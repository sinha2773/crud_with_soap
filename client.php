<?php
$client = new SoapClient(null, array(
      'location' => "http://localhost/soap/server.php",
      'uri'      => "http://localhost/soap/server.php",
      'trace'    => 1 )
);
?>