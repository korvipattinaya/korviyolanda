

<nav class="fh5co-nav" role="navigation" style="color: #FF5733;">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo" ><a href="https://korviyolawedding.com/">Wedding<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li <?php if (basename($_SERVER['REQUEST_URI']) == "korviyola" || basename($_SERVER['REQUEST_URI']) == 'index') echo 'class="active"' ?> >
							<a id="home" href="#" onClick="clickMenu(this.id)" >Home</a></li>
						<li <?php if (basename($_SERVER['REQUEST_URI']) == "register")  echo 'class="active"' ?> >
							<a id="register" href="#" onClick="clickMenu(this.id)" >Registration</a></li>
						<li <?php if (basename($_SERVER['REQUEST_URI']) == "listinvitation")  echo 'class="active"' ?> >
							<a id="check" href="#" onClick="clickMenu(this.id)" >Checking</a></li>
						<li <?php if (basename($_SERVER['REQUEST_URI']) == "listinvitationbale")  echo 'class="active"' ?> >
							<a id="checkresepsi" href="#" onClick="clickMenu(this.id)" >Checking Reception</a></li>	
						<li <?php if (basename($_SERVER['REQUEST_URI']) == "listinvitationbale")  echo 'class="active"' ?> >
							<a id="checkbale" href="#" onClick="clickMenu(this.id)" >Checking Bale</a></li>	
					</ul>
				</div>
				
			</div>
			
		</div>
	</nav>

	<script type="text/javascript">
		function clickMenu(clicked_id){
			if(clicked_id == "home"){
				window.location.href = "https://korviyolawedding.com/";
			}else if(clicked_id == "register"){
				window.location.href = "https://korviyolawedding.com/registerresepsi";
			}else if(clicked_id == "check"){
				window.location.href = "https://korviyolawedding.com/listinvitation";
			}else if(clicked_id == "checkbale"){
				window.location.href = "https://korviyolawedding.com/listinvitationbale";
			}else if(clicked_id == "checkresepsi"){
				window.location.href = "https://korviyolawedding.com/listinvitationresepsi";
			}
		}

	</script>