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
		<link rel="stylesheet" href="/css/bulma.css"/>
			
	</head>
	<body style="background-color: rgba(120,120,120,0.4);" >
	<div class="row">
		<div class="col-2 navDiv clickable" id="tab1" ><a href="/">StoreApp</a></div>
		<div class='col-2 navDiv clickable' id="tab2" >Company</div>
		<div class="col-2"></div>
		<div class="navDiv1">
			<button class='btn btn-primary navBtn' onclick="javascrpit:closing(1)">&#128694; Log Out</button>
			<button class='btn btn-danger navBtn ' onclick="javascrpit:closing(2)">&#10006; Exit</button>
		</div>
		
	</div>
	<hr class="hr-primary">
	

	<div class="row" >
		<div class="col-lg-6 bigDiv">
			<div class="row"> 
				<div class="col-12 form-title">
					New Company
				</div>

			</div>

			<form action="/company" method="post" >
			@csrf
				<input type="text" name="name" class="form-input" placeholder ="Enter Name of the Company">
				@error('name')
                    <p class="help is-danger">{{ $errors->first('name')}}</p>
                @enderror
				<br>
				<input type="text" name="address" placeholder="Enter Address" class="form-input">
				@error('address')
                    <p class="help is-danger">{{ $errors->first('address')}}</p>
                @enderror
				<input type="text" name="telephone" placeholder="Enter Telephone number" class="form-input">
				@error('telephone')
                    <p class="help is-danger">{{ $errors->first('telephone')}}</p>
                @enderror
				<input type="date" name="open_date" placeholder="Enter Open Date" class="form-input">
				@error('open_date')
                    <p class="help is-danger">{{ $errors->first('open_date')}}</p>
				@enderror
				<input type="date" name="end_date" placeholder="Enter End Date" class="form-input">
				@error('end_date')
                    <p class="help is-danger">{{ $errors->first('end_date')}}</p>
                @enderror
				<button type="submit" class="btn btn-primary"><span>Create</span></button>
			</form>
		</div>
		<div class="col-lg-5 left-aside">
			<img src="/images/com.jpg" class="left-aside-img">
		</div>
	</div>

	<form id="hidden-logout" method="post">
		<button id="close1" name="logout" type="submit">logout</button>
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
