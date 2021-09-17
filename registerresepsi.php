<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php include 'lib.php'; ?>
		
	</head>
	<body onload="sweetAlert()">
	
	
	<script type="text/javascript" >
		function sweetAlert(){
		  (async () => {

		  const { value: formValues } = await Swal.fire({
		    title: 'Give Wishes',
		    html:
		      '<input id="nama1" name="nama1" class="swal2-input" autofocus placeholder="Name">' +
		      '<textarea id="ucapan" name="ucapan" class="swal2-textarea" placeholder="Wishes">',
		    focusConfirm: false,
		    preConfirm: () => {
		      if(document.getElementById('nama1').value == ""){
		      	 Swal.showValidationMessage('Name Empty');	
		      }else if(document.getElementById('ucapan').value == ""){
		      	 Swal.showValidationMessage('Give Celebrate Empty');	
		      }

		      // return [
		      //   ,
		      //   
		      // ]
		    }
		  })

		  if (formValues) {
		  //   $.post("ucapan.php", {request: JSON.stringify(formValues)}, function(data) {
			 //    console.log(data);
			 //  });
			 //  swal({type: 'success', title: document.getElementById('nama').value});
		  // }
		  var data = {"nama": document.getElementById('nama1').value,
					 "ucapan": document.getElementById('ucapan').value};

		  		$.ajax({
					type: 'POST',
					url: "ucapan.php",
					data: data,
					success: function() {
						swal({type: 'success', title: "Thank You For your wishes"});
					}
				});
		  	}

		  })()
		}
		</script>	    
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<?php include 'menu.php'; ?>

	<?php include 'header.php'; ?>	

	<div class="fh5co-loader"></div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-6 animate-box">
				<h3> Attendance Form</h3>
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

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t" id="event_korvi">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Lunch</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>12:00 PM</span>
										<span>02:00 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Saturday 05</span>
										<span>May, 2021</span>
									</div>
									<p>DressCode : Formal <br>
									Platinum Hotel Converence <br>
									Only those who have got the invitation can attend</p>
								</div>
							</div>
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
	
	<script>
	    
		let map;

		function initMap() {
		  map = new google.maps.Map(document.getElementById("map"), {
		    center: { lat: -7.782005602965423, lng: 110.43629530131601 },
		    zoom: 16,  
    		mapTypeId:google.maps.MapTypeId.ROADMAP
		  });

		  var peta = new google.maps.Map(document.getElementById("map"), map);
  
		  // membuat Marker
		  var marker=new google.maps.Marker({
		      position: new google.maps.LatLng(-7.782005602965423,110.43629530131601),
		      map: peta,
		      animation: google.maps.Animation.BOUNCE
		  });
		}

	    function attandance (){
		     
	         var nama = $("#nama").val();
	         var total = $("#total").val();
	         var undangan = "";

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
		             url: "kehadiranresepsi.php",
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

