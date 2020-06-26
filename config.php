<?php

$dbusername = 'root';
$dbuserpass = '';
$dbhost= 'localhost';
$dbname = 'chat';

$var = "mysql:host=" . $dbhost . ";dbname=" . $dbname . ";";
$con = new PDO($var, $dbusername, $dbuserpass);