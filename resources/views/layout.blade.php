<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> StoreApp - </title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	
    <!-- Custom styles -->
    <link href="/css/shop-styles.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><h2 style="color: orange; font-family: roboto;">{{ $company->name }}</h2> StoreApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<form class="form-inline" action="/action_page.php">
					<input class="form-control col-md-8 mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</li> -->
			<li class="navDiv">
				<span class="nav-link">Welcome Tony </span>
            </li>
			<li class="nav-item">
				<span class="nav-link"> | </span>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="model/login/logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
 
@yield('content')

  <!-- Footer -->
  <footer class="footer bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; StoreApp <?php echo date('Y'); ?></p>
      </div>
    </footer>



<script>

</script>
  </body>
</html>
