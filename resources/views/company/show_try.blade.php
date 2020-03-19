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
	<link rel="stylesheet" href="/css/cerulean.theme.min.css">
	
	<!-- Datatables CSS -->
	<link rel="stylesheet" type="text/css" href="css/datatables.css">
	
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">

    <!-- Custom styles -->
    <link href="/css/shop-styles.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

	<style>
	body{
		font-family: "Times New Roman", Georgia, serif;
	}

	p{
		font-family: "Times New Roman", Georgia, serif;
		font-size: 12pt;
	}
	
	</style>
  </head> 
   <body>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/inventory-management-system/"><h2 style="color: orange; font-family: roboto;">Electric Shop 2020</h2> StoreApp</a>
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
			<li >
				<span class="nav-link">Welcome Anthony Ankomah</span>
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
    <!-- Page Content -->
    <div class="container-fluid">
    	<br>

	  <div class="row">
			<div class="col-md-2">
			<h1 class="my-4"></h1>
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link" id="v-pills-item-tab" data-toggle="pill" href="#v-pills-item" role="tab" aria-controls="v-pills-item" aria-selected="true">Item</a>
				<a class="nav-link" id="v-pills-purchase-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-purchase" aria-selected="false">Purchase</a>
				<a class="nav-link" id="v-pills-vendor-tab" data-toggle="pill" href="#v-pills-vendor" role="tab" aria-controls="v-pills-vendor" aria-selected="false">Vendor</a>
				<a class="nav-link active" id="v-pills-sale-tab" data-toggle="pill" href="#v-pills-sale" role="tab" aria-controls="v-pills-sale" aria-selected="false">Sale</a>
				<a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Customer</a>
				<a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">Account</a>
				<a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search</a>
				<a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">Reports</a>
				</div>
			</div>
			<div class="col-md-10">
			<div id="salesDiv">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="/company" class="home-btn navBtn">Back</a>
                        </div>
                        <div class="col-md-4">
                            <h1 class="heading has-text-weight-bold is-size-4" style="margin-left: 2px;" id="divName">Cash Sales</h1>
                        </div>
                        <div class="col-md-3 top-tab clickable" onclick="cashSalesDiv()" id="cashSalesDivTab">Cash</div>
                        <div class="col-md-3 top-tab clickable" onclick="creditSalesDiv()" id="creditSalesDivTab">Credit</div>
                    </div>
                    <div class="row bigDiv white-bg" id="cashSalesDiv">
                        <h1 class="heading has-text-weight-bold is-size-4">Cash Sales Invoice</h1>
                        <form action="" method="post" >
                            @csrf
                            <table>
                                <thead>
                                    <th>Sales ID:</th>
                                    <th>Customer:</th>
                                    <th>ID:</th>
                                    <th>Date:</th>
                                </thead>
                                    
                                <tr>
                                    <td>
                                        <input type="text" class="input" readonly value="2" disabled>
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input" disabled>
                                    </td>
                                    <td>
                                        <input type="text" class="input" >
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <thead>
                                    <th>Item:</th>
                                    <th>Qty:</th>
                                    <th>Price:</th>
                                    <th>Total:</th>
                                </thead>
                                    
                                <tr>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="text" class="input" readonly id="totalTry">
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <table class="table">
                                <thead>
                                    <th>ID</th>
                                    <th>Item Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </thead>
                                <tbody id="salesTBody">
                                    <tr>
                                        <td>2</td>
                                        <td>Milk</td>
                                        <td>2</td>
                                        <td>5.00</td>
                                        <td>15.00</td>
                                        <td> - </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table">
                                    <tr class="italic bold">
                                        
                                        <td>Total Before Tax</td>
                                        <td></td>
                                        <td></td>
                                        <td>22.50</td>
                                    </tr>
                                    <tr class="italic bold">
                                        <td>Discount</td>
                                        <td></td>
                                        <td></td>
                                        <td>2.50</td>
                                    </tr>
                                    
                                    <tr class="italic bold border red">
                                        <td>Total Less Tax</td>
                                        <td></td>
                                        <td></td>
                                        <td class="red">20.00</td> 
                                    </tr>
                                    
                            </table>
                        </form>
                    </div>
                    <div class="row" id="creditSalesDiv">
                        Credit Sales Details input
                    </div>
                </div>
                <div id="purchaseDiv">
                    Purchase Details
                </div>
                <div id="customersDiv">
                    Customers Details
                </div>
                <div id="creditorsDiv">
                    Credtors Details
                </div>
                <div id="stockDiv">
                    Stocks Details
                </div>
                <div id="accountDiv">
                    account Details
                </div>
                <div id="reportDiv">
                    report Details
                </div>
			</div>
		 </div>
	  </div>
    </div>
    <!-- Footer -->
    <footer class="footer bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; StoreApp 2020</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!-- Datatables script -->
	<script type="text/javascript" charset="utf8" src="vendor/DataTables/datatables.js"></script>
	<script type="text/javascript" charset="utf8" src="vendor/DataTables/sumsum.js"></script>
	
	<!-- Chosen files for select boxes -->
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<link rel="stylesheet" href="vendor/chosen/chosen.css" />
	
	<!-- Datepicker JS -->
	<script src="vendor/datepicker164/js/bootstrap-datepicker.min.js"></script>
	
	<!-- Bootbox JS -->
	<script src="vendor/bootbox/bootbox.min.js"></script>
	
	<!-- Custom scripts -->
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/login.js"></script>  </body>
</html>