<?php
echo "<h3>Attempting SECURE SSL database connection...</h3>";

$host = 'new-server1.mysql.database.azure.com';
$username = 'dbadmin';
$password = 'Server123'; // <-- IMPORTANT: REPLACE THIS
$dbname = 'wordpress';
$cert_path = '/home/site/wwwroot/DigiCertGlobalRootG2.crt.pem';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $cert_path, NULL, NULL);
$connection_result = mysqli_real_connect($conn, $host, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL);

if (!$connection_result) {
  echo "<h2>Connection Test Result: FAILED</h2>";
  die("<b>The specific error is:</b> " . mysqli_connect_error() . " (Error No: " . mysqli_connect_errno() . ")");
}

echo "<h2>Connection Test Result: SUCCESS!</h2>";
mysqli_close($conn);
?>