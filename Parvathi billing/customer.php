<?php include("server/customer_insertion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width, initial scale=1.0">

	<title>customer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
		 <div class="details">
		 	<form method="post" action="customer.php">
   			<label>Customer Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   			<input type="text" name="customer_name"><br><br><br>
   			<label>Place</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   			<input type="text" name="customer_place"><br><br><br>
   			<label>Mobile</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   			<input type="text" name="customer_mobile"><br><br><br>
   			<button type="submit" name="submit" class="btn">Submit</button>
   		    </form>
		 </div>
	</div>
	<div class="footer">
		
	</div>
</body>
</html>