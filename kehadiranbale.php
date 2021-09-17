<?php
require_once("koneksi.php");

$db_host = "localhost:3306";
$db_user = "korviyol_user";
$db_pass = "korviyola2212";
$db_name = "korviyol_database";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nama=$_POST['nama'];
$undangan=$_POST['undangan'];
$total=$_POST['total'];

$sql0 = "SELECT id FROM kehadiranbale WHERE trim(upper(nama))=trim(upper('". $nama ."'))  LIMIT 1";
$result = $conn->query($sql0);
//AND trim(upper(undangan))=trim(upper('". $undangan ."'))
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo "You have registered, please screen shoot your number registration: " . $row["id"];
		return;
	}
}else{
	 $sql = "INSERT INTO kehadiranbale (nama, kerabat, souvenir, total) VALUES ('".$nama."', '".$undangan."', 'Belum', '".$total."') ";

	if ($conn->query($sql) === TRUE) {
	  $last_id = $conn->insert_id;
	  echo "Please Screen Shoot for remember your attandance: " . $last_id;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}






$conn->close();

?>