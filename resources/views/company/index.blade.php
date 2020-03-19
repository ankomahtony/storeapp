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
		<div class="col-2 navDiv clickable" id="tab1" ><a href="/" style="text-decoration: none;">StoreApp</a></div>
		<div class='col-2 navDiv clickable' id="tab2" >Company</div>
		<div class="col-2"></div>
		<div class="navDiv1">
			<button class='btn btn-primary navBtn' onclick="javascrpit:closing(1)">&#128694; Login</button>
			<button class='btn btn-danger navBtn ' onclick="javascrpit:closing(2)">&#10006; Exit</button>
		</div>
		
	</div>
	<hr class="hr-primary">
	
	<!-- SELECTING A COMPANY SECTION -->
	<div class="row" id="tab1Content">
    <div class="col-md-6 bigDiv">
			<div class="selectDiv clickable"><a href="{{ route('company.create') }}" style="color: BLACK; text-decoration: none;">Create Company</a> </div>
			<div class="selectDiv clickable">Remove Company</div>
		</div>
		<div class="col-md-5 left-aside">
		<img src="images/hpbg1.jpg" class="left-aside-img">
			<div id="openCom" class="centered" style="display: block;">
				<h2 style="text-align: center;color: darkblue; background-color: snow;"><b> SELECT COMPANY </b></h2>
				<hr>
				@foreach($companies as $company)
				<a href="{{ route('company.show',$company) }}" style="color:white;"> <h2 class="clickable">{{ $company->name }} </h2> </a>
				@endforeach
			</div>
		</div>
	</div>

	<form id="hidden-logout" method="post">
	@csrf
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
		document.getElementById("tab2").click();
		function selectTab(tabIndex) {
			document.getElementById('tab1Content').style.display = "none";
			document.getElementById('tab2Content').style.display = "none";
			document.getElementById('tab4Content').style.display = "none";

			document.getElementById('tab'+tabIndex+'Content').style.display="block";

			if (tabIndex==1) {
				document.getElementById('tab1').style.display = "block";
				document.getElementById('tab2').style.display = "none";
			}else{
				document.getElementById('tab1').style.display = "block";
				document.getElementById('tab2').style.display = "block";
			}
		}
	function selectCom(){
		document.getElementById('openCom').style.display = "block";
	}
	function selectRemoveCom(){
		document.getElementById('removeCom').style.display = "block";
	}

	function closing(closeIndex){
		document.getElementById("close"+closeIndex).click();
	}
	
	</script>

</html>
