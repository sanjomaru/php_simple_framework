<?php require_once APPROOT.'/views/inc/header.php'; ?>

<h1>PDO PRACTICE</h1>

<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'psf';

//Create DSN connection
$dsn = 'msql:host='.$host.';dbname='.$dbname;

//Create PDO instance
$pdo = new PDO($dsn, $user, $password);

?>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>