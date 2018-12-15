<?php 
	$product_name="";
	$product_price="";

	$db=mysqli_connect('localhost','root','','parvathi');
	if(isset($_POST['submit'])){
		$product_name=mysql_real_escape_string($_POST['product_name']);
		$product_price=mysql_real_escape_string($_POST['product_price']);
		$product = "INSERT INTO Product (productname, productprice) 
				    VALUES('$product_name','$product_price')";		    
		mysqli_query($db, $product);
		echo "Data Added";
		}


?> 