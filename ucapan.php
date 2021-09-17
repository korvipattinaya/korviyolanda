<?php
require_once("koneksi.php");

$nama=$_POST['nama'];
$ucapan=$_POST['ucapan'];

$a = array("ava1","ava2","ava3","ava4","ava5","ava6");
$random_keys=array_rand($a,2);
$ava =  "images/".$a[$random_keys[1]].".jpeg";

$sql = "INSERT INTO ucapan (nama, ucapan, ava) 
            VALUES (:nama, :ucapan, :ava)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
		":ucapan" => $ucapan,
		":ava" => $ava
    );
 $stmt->execute($params);

?>