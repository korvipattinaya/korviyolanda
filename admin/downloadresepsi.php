<?php
include_once("xlsxwriter.class.php");
require_once("../koneksi.php");

$sql = "SELECT * FROM kehadiranjogja order by id";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$array_data = array();
foreach($result as $row) {
	$array_data[]=$row;
}

$tgl = date('r');
$filename = "KorviYolandaWeddingBaleBengong.xlsx";
header('Content-disposition: attachment; filename="'.XLSXWriter::sanitize_filename($filename).'"');
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');
$header = array(
  'No.'=>'integer',
  'Nama'=>'string',//text
  'Kerabat'=>'string',
  'Souvenir'=>'string',
  'Total'=>'integer'
  );

$n=count($array_data);
for($i=0; $i<$n; $i++){
	$data[]=array(
		$array_data[$i]['id'],
		$array_data[$i]['nama'],
		$array_data[$i]['kerabat'],
		$array_data[$i]['souvenir'],
		$array_data[$i]['total']
	);
}
$rows=$data;

$writer = new XLSXWriter();
$writer->setAuthor('Korvi Yolanda Platinum Hotel'); 
$writer->writeSheetHeader('Sheet1', $header);
foreach($rows as $row) $writer->writeSheetRow('Sheet1', $row);
$writer->writeToStdOut();
exit(0);


