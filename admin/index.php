<?php 
require_once("../koneksi.php");

$sql = "SELECT * FROM kehadiran order by keluarga, nama  ";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


if(isset($_POST['ambil'])){
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	$sql = "UPDATE kehadiran  
            SET souvenir = :souvenir
			WHERE id = :id
			";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
		":id" => $id,
    	":souvenir" => 'Sudah'
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: index.php");
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php include 'lib.php'; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<?php include 'menu.php'; ?>

	<div class="fh5co-loader"></div>
	
	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

          
            <div class="card mb-3">
				<div class="card-header text-center bg-dark text-white">List Invitation of Church</div>
                <div class="card-body">
					<div id="no-more-tables">
						<p align="right">
						<a class="btn btn-success" href="download.php">Download XLSX</a>
					</p>
								<table class="table table-bordered table-responsive">
									<thead class="bg-secondary text-white">
										<tr>
											<th style="text-align:center">Name</th>
											<th style="text-align:center">Queue</th>
											<th style="text-align:center">Family</th>		
											<th style="text-align:center">Gift</th>
										</tr>
									</thead>
									<tbody>

										<?php foreach($result as $row) {?>
										<tr>
											<td data-title="Nama" style="text-align:center"><b><?php echo $row["nama"];?></b></td>
											<td data-title="No." style="text-align:center;"><?php echo $row["id"];?></td>
											<td data-title="Jenis Kelamin" style="text-align:center"><?php echo $row["keluarga"];?></td>
											<td data-title="Status" style="text-align:center">
												<?php
													if ($row["souvenir"]!='Sudah'){
												?>
												<form method="POST">		
													<input id="id" type="text" name="id" value="<?php echo $row["id"];?>" hidden>
													<input type="submit" class="btn btn-success btn-block" name="ambil" value="Souvenir" />
												</form>
												<?php	
													}else{
													echo $row["souvenir"];
												 } ?>

											</td>												
										</tr>
										<?php } ?>
									</tbody>
								</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>	

	<footer id="fh5co-footer" role="contentinfo">
		
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	</body>
</html>

