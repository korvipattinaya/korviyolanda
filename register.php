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

	<?php include 'header.php'; ?>	

	<div class="fh5co-loader"></div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-6 animate-box">
				<h3>Form Attendance</h3>
				<form action="#">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">Name</label>
							<input type="text" id="nama" class="form-control" placeholder="Your Name">
						</div>
						<div class="col-md-6">
							<label for="fname">Total your Bring</label>
							<input type="number" id="total" class="form-control" placeholder="Total your Bring">
						</div>
						<div class="col-md-6">
							<label for="consinguineous" >Consinguineous</label><br>
							<input type="radio" class="radioBtnClass" name="undangan"  value="korvi" checked>
							<label for="undangan">Korvi</label>
							<input type="radio" class="radioBtnClass" name="undangan"  value="yolanda">
							<label for="undangan">Yolanda</label>
						</div>
					</div>

					
					<div class="form-group">
						<p><a href="#event_korvi" class="btn btn-primary" id="save" onclick="javascript:attandance()" >I am Attending</a></p>
					</div>

				</form>		
			</div>
			<div class="col-md-5 col-md-pull-5 animate-box">
				
				<div class="fh5co-contact-info">
					<h3>Information</h3>
					<div id="map" class="fh5co-map">
		
					</div>
					<script  defer
			    		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIfqKFPSxytVJtFkmaTOCRdnkzD66yD7E&callback=initMap" 
			    		type="text/javascript">
					</script>
				</div>

			</div>
		</div>
		
	</div>

	
		<!-- END map -->

	<?php include 'information.php' ?>
	<footer id="fh5co-footer" role="contentinfo">
		
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script>
	    
		let map;

		function initMap() {
		  map = new google.maps.Map(document.getElementById("map"), {
		    center: { lat: -6.262772, lng: 106.886800 },
		    zoom: 16,
    		mapTypeId:google.maps.MapTypeId.ROADMAP
		  });

		  var peta = new google.maps.Map(document.getElementById("map"), map);
  
		  // membuat Marker
		  var marker=new google.maps.Marker({
		      position: new google.maps.LatLng(-6.262772, 106.886800),
		      map: peta,
		      animation: google.maps.Animation.BOUNCE
		  });
		}

	    function attandance (){
		     
	         var nama = $("#nama").val();
	         var undangan = "";
	         var total = $("#total").val();

	         if($("input[type='radio'].radioBtnClass").is(':checked')) {
			     undangan = $("input[type='radio'].radioBtnClass:checked").val();
			 }
	         //alert(undangan);
	         if (nama == "") {
	             swal({type: 'error', title: "Name Empty!!!!"});
	             return false;
	         }else if(total == ""){
	         	swal({type: 'error', title: "Amount your bring Empty!!!!"});
	             return false;	
	         }else{
		         //Ajax call to send data to the insert.php
		         $.ajax({
		             type: "POST",
		             url: "kehadiran.php",
		             data: {nama: nama, undangan: undangan, total: total},
		             cache: false,
		             success: function (result) {
		                 swal({type: 'success', title: result});
		             }
		         });
		     }
         }
	</script>
	</body>
</html>

