<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'uts_proweb';
//membuat koneksi db
$conn = new mysqli($servername,$username,$password,$db);
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
?>