<?php 
	$dsn = 'mysql:host=localhost;dbname=mingyuan;charset=utf8';
    $pdo = new Pdo($dsn,'root','dkd110');
    return $pdo;