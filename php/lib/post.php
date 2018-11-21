<?php 
require_once("/etc/apache2/capstone-mysql/Secrets.php");

//absolute path to YOUR ini file on the server 
$secrets =  new Secrets("/home/gkephart/gkephart.ini");
$pdo = $secrets->getPdoObject();
