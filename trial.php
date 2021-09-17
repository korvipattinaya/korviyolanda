<?php
	require_once("koneksi.php");

	$sql = "SELECT * FROM ucapan";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetchAll();
?>


<!DOCTYPE html>

<html class="no-js">
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

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>December 22th, 2020 Jakarta, INA</h3>
					<p>We invited you to celebrate our wedding</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/korvi_1.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Korvi Pattinaya</h3>
						<p>Son of <br>Hans A.S Pattinaya <br>&amp; R.A Enny Pradayaning Restyowati</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/yolanda.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Yolanda Monika Permatasari</h3>
						<p>Daughter of <br>JB Karwibowo Himawan(Oei Tjing Han)рх╗ <br>&amp; Angela Pudjiarti</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'information.php' ?>
	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>We Love Each Other</span>
					<h2>Our Story</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/2014_2.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Goa Cina Beach</h3>
									<span class="date">October 17, 2014</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/2014_3.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Social Survey Skadron(Kendal)</h3>
									<span class="date">November 18, 2014</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2015_1.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Social Service Kendal</h3>
									<span class="date">January 05, 2015</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2015_3.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Solo</h3>
									<span class="date">Febuary 21, 2015</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2015_8.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sabesi Beach(Lampung)</h3>
									<span class="date">March 21, 2015</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2015_9.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Krakatau Mountain</h3>
									<span class="date">March 22, 2015</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/2016_3.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Malang(Paralayang)</h3>
									<span class="date">June 5, 2016</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2016_5.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Semarang</h3>
									<span class="date">May 14, 2017</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2015_13.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Ijen Crater</h3>
									<span class="date">September 26, 2017</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/2018_3.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Bali</h3>
									<span class="date">May 20, 2018</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/2018_13.JPG);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Singapore &amp; Kuala Lumpur</h3>
									<span class="date">December 28, 2018</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/2019_24.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Korea</h3>
									<span class="date">November 20, 2019</span>
								</div>
								<div class="timeline-body">
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
   

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Are You Attending?</h2>
					<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" >Name</label>
								<input type="name" class="form-control" id="nama" placeholder="Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="lname" >Total your Bring</label>
								<input type="number" class="form-control" id="total" placeholder="Total your Bring">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="consinguineous" >Consinguineous</label><br>
								<input type="radio" class="radioBtnClass" name="undangan" value="korvi" checked>
								<label for="undangan">Korvi</label>
								<input type="radio" class="radioBtnClass" name="undangan"  value="yolanda">
								<label for="undangan">Yolanda</label>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- <button type="submit" class="btn btn-default btn-block" id="save">I am Attending</button> -->
							<p><a href="#event_korvi" class="btn btn-default btn-sm" id="save" onclick="javascript:attandance()" >I am Attending</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Streaming by Youtube</h2>
					<p>Allow watching Streaming Youtube for Wedding Korvi and Yolanda</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-calendar"></i>
						</span>
						<div class="feature-copy">
							<p>22 December 2020</p>
							<p>02:00 PM</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Live Streaming</h3>
							<p>Because social distancing, you can watch the wedding on your screen</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/tFtCyPUjoV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
								<?php foreach($result as $row) {?>
								<div class="item">
									<div class="testimony-slide active text-center">
									 	<figure>
									 		<img src="<?php echo $row["ava"]; ?>" >
										</figure> 
										<span><?php echo $row["nama"];?></span>
										<blockquote>
											<p><?php echo $row["ucapan"];?></p>
										</blockquote>
										
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	

	<script>
	    var d = new Date("2020-12-22");

	    // default example
	    simplyCountdown('.simply-countdown-one', {
	        year: d.getFullYear(),
	        month: d.getMonth() + 1,
	        day: d.getDate()
	    });

	    //jQuery example
	    $('#simply-countdown-losange').simplyCountdown({
	        year: d.getFullYear(),
	        month: d.getMonth() + 1,
	        day: d.getDate(),
	        enableUtc: false
	    });


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

