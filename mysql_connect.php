<?php
$user = 'f4udc2gb5709weq4';
$password = 'prboznh0jti1en8l';
$db = 'umvhqlt2degpuufz';
$host = 'nr84dudlpkazpylz.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn,$user,$password);

?>
