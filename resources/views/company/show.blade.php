
<html>
    <head>
    <title>StoreApp - your store in your hand</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            /* font-weight: 400; */
            line-height: 1.5;
            color: #495057;
            text-align: left;
        }
        .bg-dark {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#04519b), color-stop(60%, #033C73), to(#02325f));
            background-image: linear-gradient(#04519b, #033C73 60%, #02325f);
            background-repeat: no-repeat;
            background-color: #343a40 !important;
        }
        .company-name{
            background-color: lightblue;
            color: blue;
            font-size:35pt;
        }
        .tool-link{
            font-size: 24pt;
            margin-left: 5%;
        }
        .menu-aside{
            background-color: orange;
            /* height: 650; */
        }
        .home-btn{
            padding: 1%;
            margin: 1%;
            /* border: solid rgba(120,20,20,.8); */
            width: 15%;
            font-size: 18; 
            color: rgba(120,20,20,.8); 
            background-color: whitesmoke;
        }  
        .home-btn:hover{
            background-color: rgba(120,20,20,.8);
            color: white;
            text-decoration: none;
        }
        .back-btn{
            border: solid rgba(120,20,20,.8);
            font-size: 26; 
            color: rgba(120,20,20,.8); 
            background-color: whitesmoke;
        }
        .back-btn:hover{
            background-color: rgba(120,20,20,.8);
            color: white;
            text-decoration: none;
        }
        .tab-box{
            padding: 0.5%;
            margin-left: 1%;
            background-color: gray;
            width: 100%;
            margin-bottom: 1%;
            color: whitesmoke;
            
        }
        .tab-box:hover{
            margin-left: 7%;
            background-color: wheat;
            color: gray;
        }
        .tab-item{
            font-size: 16pt;
        }
        .right-aside{
            top: 0;
            background-color: rgba(240,240,240,.8);
        }
        .top-tab{
            font-size: 18pt;
            background-color: burlywood;
            padding: 10px;
            text-align: center;
        }
        .top-tab:hover{
            border: solid wheat;
            background-color: whitesmoke;
            color: burlywood;
        }
        #cashSalesDiv{
            height: 87%;
            /* background-color: red; */
            display: none;
        }
        #creditSalesDiv{
            height: 87%;
            background-color: blue;
            display: none;
        }
        .small-font{
            font-size: 12pt;
        }
        .small-width{
            width: 20px;
        }
        .bold{
            font-weight: bold;
        }
        .italic{
            font-style:italic;
        }
        .white{
            color: wheat;
        }
        .red{
            color: red;
        }
        .white-bg{
            background-color: whitesmoke;
            color: orange;
        }
        .margin-right-1{
            margin-right: 0.5%;
        }

        .bigDivNew{
            background-color: whitesmoke;
            float:left;
            height:auto;
            width: 100%;
            padding: 5px;
            border: 10px;
            box-shadow: 5px 8px 8px 5px #903010;
            margin-top: 5px;
        }

    </style>
</head>
    
    <body>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark top" style="background-color: blue;">
      <div class="container">
        <a class="navbar-brand" href="/"><h2 style="color: orange; font-family: roboto;">{{$company->name}}</h2> StoreApp</a>
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<li >
				<span class="nav-link">Welcome Anthony Ankomah</span>
            </li>
			<li class="nav-item">
				<span class="nav-link"> | </span>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="#">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <!-- <div class="row company-name">
            <a href="/" class="navDiv home-btn clickable">Home</a>
            <h1 style="margin-left: 2%;">{{ $company->name }}</h1>
            <div class="tool-link navDiv home-btn">
                <a href="{{ route('company.edit',$company) }}">Edit</a>
             </div>
            <button type="submit" class="btn navDiv home-btn">Logout</button>
        </div> -->
        <div class="row">
            <div class="col-md-3 menu-aside white-bg">
                
                <div class="row  clickable bg-dark tab-box" id="salesDivTab" onclick="divChange('salesDiv')">
                        <p class="tab-item">Sales</p>
                </div>
                <div class="row clickable bg-dark tab-box" id="purchaseDivTab" onclick="divChange('purchaseDiv')">
                        <p class="tab-item">Purchase</p>
                </div>
                <div class="row tab-box clickable bg-dark" id="customersDivTab" onclick="divChange('customersDiv')">
                        <p class="tab-item">Customers</p>
                </div>
                <div class="row tab-box clickable bg-dark" id="creditorsDivTab" onclick="divChange('creditorsDiv')">
                        <p class="tab-item">Creditors</p>
                </div>
                <div class="row tab-box clickable bg-dark" id="stockDivTab" onclick="divChange('stockDiv')">
                        <p class="tab-item">Stock</p>
                </div>
                <div class="row tab-box clickable bg-dark" id="accountDivTab" onclick="divChange('accountDiv')">
                        <p class="tab-item">Account</p>
                </div>
                <div class="row tab-box clickable bg-dark" id="reportDivTab" onclick="divChange('reportDiv')">
                        <p class="tab-item">Reports</p>
                </div>
            </div>
            <div class="col-md-9 right-aside">
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
                    <div class="row bigDivNew white-bg" id="cashSalesDiv">
                        <h1 class="heading has-text-weight-bold is-size-4">Cash Sales Invoice</h1>
                        <form method="post" >
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
                                        <input type="number" class="input" readonly value="2" disabled>
                                    </td>
                                    <td>
                                        <input type="text" class="input">
                                    </td>
                                    <td>
                                        <input type="number" class="input" disabled>
                                    </td>
                                    <td>
                                        <input type="date" class="input" >
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <thead>
                                    <th>Item:</th>
                                    <th>Qty:</th>
                                    <th>Price:</th>
                                    <th></th>
                                </thead>
                                    
                                <tr>
                                    <td>
                                        <input type="text" class="input" id="itemName1">
                                    </td>
                                    <td>
                                        <input type="text" class="input" id="itemQty1">
                                    </td>
                                    <td>
                                        <input type="text" class="input" id="itemPrice1">
                                    </td>
                                    <td> 
                                        <button type="button" class="btn btn-primary addItem input" name="addItem" onclick="addItem()">Add</button>
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
                                    
                                </tbody>
                            </table>
                            <table class="table">
                                    <tr class="italic bold">
                                        
                                        <td colspan="3">Total Before Tax</td>
                                        <td></td>
                                        <td></td>
                                        <td> <div id="totalTB"></div></td>
                                    </tr>
                                    <tr class="italic bold">
                                        <td colspan="1">Discount</td>
                                        <td>
                                            <select name="discount" id="discount">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td id="discountPercent"></td>
                                    </tr>
                                    
                                    <tr class="italic bold border red">
                                        <td colspan="3">Total Less Tax</td>
                                        <td></td>
                                        <td></td>
                                        <td class="red"><div id="totalLT"></div></td> 
                                    </tr>
                                    
                            </table>
                            <table class="table">
                                <thead>
                                    <th>Select Account</th>
                                    <th>Bank Name</th>
                                    <th>Account Name</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                <tr> 
                                    <td>
                                        <select name="accountUsed" id="accountUsed" class="input">
                                            <option value="Cash">Cash</option>
                                            <option value="Bank">Bank</option>
                                        </select>
                                    </td>
                                    <td id="accountBank"></td>
                                    <td id="accountNumber"></td>
                                    <td>
                                        <button type="submit" class="btn btn-success input">Save</button>
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>
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
        <div style="font-size: 20px; padding-top:30px; text-align:center;">
		    Copyright Reserved Tony @  <?php echo date('Y') ?>
        </div>
        
        <script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
        <script>
        
            document.getElementById('salesDivTab').click();
            document.getElementById('cashSalesDivTab').click();
            
            function divChange(divName){
                document.getElementById('salesDiv').style.display='none';
                document.getElementById('purchaseDiv').style.display='none';
                document.getElementById('customersDiv').style.display='none';
                document.getElementById('creditorsDiv').style.display='none';
                document.getElementById('stockDiv').style.display='none';
                document.getElementById('accountDiv').style.display='none';
                document.getElementById('reportDiv').style.display='none';
               
                document.getElementById(divName).style.display='block';
                document.getElementById(divName+'Tab').style.color='orange';
                
            }
            function cashSalesDiv(){
                document.getElementById('creditSalesDiv').style.display='none';
                document.getElementById('cashSalesDiv').style.display='block';
                document.getElementById('divName').innerHTML = 'Cash Sales';
            }
            function creditSalesDiv(){
                document.getElementById('creditSalesDiv').style.display='block';
                document.getElementById('cashSalesDiv').style.display='none';
                document.getElementById('divName').innerHTML = 'Credit Sales';
                
            }

            $(document).ready(function(){
                var count = 0;
                var totalBT = 0;
                var totalLT =0;
                $(document).on('click','.addItem',function(){
                    count++;

                    var itemName = $('#itemName1').val();
                    var itemQty = $('#itemQty1').val();
                    var itemPrice = $('#itemPrice1').val();
                    var itemTotal = itemPrice * itemQty;
                    totalBT += itemTotal;
                    var html = '';
                    html += '<tr>';
                    html += '<td><input type="text" name="itemID[]"  class="input" value="'+count+'"></td><td><input type="text" name="itemName[]"  class="input" value="'+itemName+'"></td><td><input type="number" name="itemQty[]" class="input" value="'+itemQty+'"></td><td><input type="text" name="itemPrice[]" class="input" value="'+itemPrice+'"></td><td><input type="text" name="itemTotal[]" class="input" value="'+itemTotal+'"></td><td> - </td></tr>';
                    $('#salesTBody').append(html);
                    $('#itemName1').val('');
                    $('#itemQty1').val('');
                    $('#itemPrice1').val('');
                    $('#itemName1').focus();
                    $('#totalTB').text(totalBT);
                    $('#totalLT').text(totalBT);

                });
                $('#discount').change(function(){
                var discount_status = $('#discount').val();
                if (discount_status == 1){
                    newHtml = '<input type="number" name="discountPercentInput" id="discountPercentInput">';
                    $('#discountPercent').append(newHtml);
                    $('#discountPercentInput').keyup( function(){
                        discount_percent = $('#discountPercentInput').val();
                        totalLT = (1 - discount_percent / 100 ) * totalBT;
                        $('#totalLT').text(totalLT.toFixed(2));
                        
                    });
                }else{
                     totalLT = totalBT;
                     $('#totalLT').text(totalLT);
                }

            });
            var inputcount = 0;
            $('#accountUsed').change(function(){
                    var accountUsed = $('#accountUsed').val();
                    // var inputcount = 0;
                    if (accountUsed == "Bank" & inputcount==0){
                        inputcount ++
                        newHtml1 = '<input type="text" name="bankName" id="bankName" class="input">';
                        newHtml2 = '<input type="text" name="bankAccNum" id="bankAccNum" class="input">';
                        $('#accountBank').append(newHtml1);
                        $('#accountNumber').append(newHtml2);
                    }else{
                        accountUsed = "Cash";
                    }

                });
        });
            
            
            
        </script>
    </body>
</html>