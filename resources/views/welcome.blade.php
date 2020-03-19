<!DOCTYPE html>
<html>
	<head>
		<title>
			StoreApp
		</title>
		<link href="/css/style.css" rel="stylesheet">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/css/font-face.css" rel="stylesheet" media="all">
	    <link href="/css/font-awesome.min.css" rel="stylesheet" media="all">
	    <link href="/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		
	</head>
	<body style="background-color: rgba(120,120,120,0.4);" >
	<div class="row">
		<div class="col-2 navDiv clickable" >StoreApp</div>
		<div class="navDiv1">
			<button class='btn btn-primary navBtn' onclick="javascrpit:closing(1)">&#128697; Login</button>
			<button class='btn btn-danger navBtn ' onclick="javascrpit:closing(2)">&#10006; Exit</button>
		</div>
		
	</div>
	<hr class="hr-primary">
	
	<!-- SELECTING A COMPANY SECTION -->
	<div class="row" id="tab1Content">
		<div class="col-md-6 bigDiv">
		<?php
				$time=date('H');
				if ($time < 12) {
					echo '<div class="welcomeDiv">
							<br><br>
							<h1>&#128522; Good Morning &#127773; ! </h1>
							<br>
							<h2> A Big Welcome <span style="font-size:100px;"> <img src="images/welcome_new.png" class="emoji"></span> to StoreApp  </h2>
						</div>';
				}elseif ($time <16) {
					echo '<div class="welcomeDiv">
							<br><br>
							<h1>&#128522; Good Afternoon &#127774; ! </h1>
							<br>
							<h2> A Big Welcome <span style="font-size:100px;"> <img src="images/welcome_new.png" class="emoji"></span> to StoreApp  </h2>
						</div>';
				}else{
					echo '<div class="welcomeDiv">
							<br><br>
							<h1>&#128522; Good Evening &#127770; ! </h1>
							<br>
							<h2> A Big Welcome <span style="font-size:100px;"> <img src="images/welcome_new.png" class="emoji"></span> to StoreApp  </h2>
						</div>';
				}
			?>
			<!-- <div class="welcomeDiv" id="goodMorning">
			
                <br><br>
                <h1>&#128522; Good Morning &#127773; ! </h1>
                <br>
                <h2> A Big Welcome <span style="font-size:100px;"> <img src="images/welcome_new.png" class="emoji"></span> to StoreApp  </h2>
            </div>
			<div class="welcomeDiv" id="goodAfternoon">
                <br><br>
                <h1>&#128522; Good Afternoon &#127774; ! </h1>
                <br>
                <h2> A Big Welcome <span style="font-size:100px;"> <img src="images/welcome_new.png" class="emoji"></span> to StoreApp  </h2>
            </div>
            <div class="welcomeDiv" id="goodEvening">
                <br><br>
                <h1>&#128522; Good Evening &#127770; ! </h1>
                <br>
                <h2> A Big Welcome <span style="font-size:100px;"> <img src="images/welcome_new.png" class="emoji"></span> to StoreApp  </h2>
            </div>	 -->
			<br><br><br>
			<a class="clickable" id="nextToCom" href="{{ route('company.index') }}">Next To Enjoy &#10145;</a>	
		</div>
		<div class="col-md-5 left-aside">
			<img src="images/hpbg2.jpg" class="left-aside-img">
		</div>
	</div>

	<form id="hidden-logout" method="post">
		<button id="close1" name="login" type="submit">login</button>
		<button id="close2" name="exit" type="submit">exit</button>
	</form>
	<div style="font-size: 20px; padding-top:30px; text-align:center;">
		Copyright Reserved Tony @  <?php echo date('Y') ?>
	</div>
	</body>
	<script type="text/javascrpit" src="js/bootstrap.min.js"></script>
	<script type="text/javascrip" src="js/bootstrap.js"></script>
	<script type="text/javascrip" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">


	function closing(closeIndex){
		document.getElementById("close"+closeIndex).click();
	}
	
	</script>

</html>
