<?php
	require_once __DIR__ . '/vendor/autoload.php';

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	$host = $_ENV['AZURE_MYSQL_HOST'];
	$dbname = $_ENV['AZURE_MYSQL_DBNAME'];
	$port = $_ENV['AZURE_MYSQL_PORT'];
	$flag = constant($_ENV['AZURE_MYSQL_FLAG']);
	$username = $_ENV['AZURE_MYSQL_USERNAME'];
	$password = $_ENV['AZURE_MYSQL_PASSWORD'];

    $conn = mysqli_connect($host,$username,$password,$dbname);

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>