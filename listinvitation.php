<?php 
require_once("koneksi.php");

$sql = "SELECT * FROM kehadiran order by keluarga, nama  ";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

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
				<div class="card-header text-center bg-dark text-white">List Invitation BaleBengong</div>
                <div class="card-body">
					<div id="no-more-tables">
								<table class="table table-bordered table-responsive">
									<thead class="bg-secondary text-white">
										<tr>
											<th style="text-align:center">Name</th>
											<th style="text-align:center">Queue</th>
											<th style="text-align:center">Family</th>		
										</tr>
									</thead>
									<tbody>

										<?php foreach($result as $row) {?>
										<tr>
											<td data-title="Nama" style="text-align:center"><b><?php echo $row["nama"];?></b></td>
											<td data-title="No." style="text-align:center;"><?php echo $row["id"];?></td>
											<td data-title="Jenis Kelamin" style="text-align:center"><?php echo $row["keluarga"];?></td>
																							
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

