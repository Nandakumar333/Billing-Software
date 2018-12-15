<?php include("server/db_connect.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width, initial scale=1.0">

	<title>home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/product.js"></script>
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/printPage.js"></script>
  <script type="text/javascript" src="js/search-customer.js"></script>
  <script type="text/javascript" src="js/search-produc.js"></script>
</head>
<body>
	<div class="navi">
		<div class="logo"><a href="index.php">new parvathi fancy store</a>
		</div>
		<div class="nav">
		<a href="contact.php">contact</a>
		<a href="product.php">product</a>		
		<a href="customer.php">customer</a>
		<a href="index.php">home</a>	
		</div>	
	</div>
	<div class="content">
		<br><br><br>
		 <div class="bill"> 
        <form>
        <h1>Please enter data</h1><br><br>
        <label for="sno">Customer Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="search-box">
        <input type="text" id="customerName" autocomplete="off" placeholder="Enter Customer Name..." /><br>
        <div class="result"></div>
        </div><br><br>
        <label for="sno">Product</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="search-box1">
        <input type="text" id="productName" autocomplete="off" placeholder="Enter Product Name..." /><br>
        <div class="result"></div>
        </div><br><br>
        <label for="fname">Quantity</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="quantityValue" type="number" value="1" min="1" step="1" required><br><br><br>
        <label for="fname">Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="price" type="number" min="1" max="10000" step="1" required><br><br><br>
        <input type="button" value="Add" onclick="insert()" class="button" />
        </form>
    </div>
    <div class="printPage">
    <div id="print" class="print">
      <h2 id="customer"></h2>
        <table>
            <tr>
               <td id="sno"></td>
               <td id="product"></td> 
               <td id="quantity"></td> 
               <td id="priceValue"></td>
               <td id="totalprice"></td> 
   
            </tr>
            <tr>
               <td></td>
               <td></td> 
               <td></td> 
               <td>Total</td>
               <td id="grandtotal"></td> 
            </tr>
            
        </table><br><br>
    </div>
    <input type="button" value="Print" onclick="printPageArea('print')" class="printbtn" />
    </div>
		
	</div>
	<div class="footer">
		
	</div> 
</body>
</html>