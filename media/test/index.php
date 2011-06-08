<?php
error_reporting(E_ALL);

require_once('MMMClient.class.php');

$c = new MMMClient('208.43.85.135', '8000', 'dupa');
print_r($c->RestartLighttpd());
