

<?php



$servername = "ns1.goviralhost.net";
$username = "modmonki_modernmonk";
$password = "T2t2025@";
$dbname = "modmonki_noteurhints";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}



?>
