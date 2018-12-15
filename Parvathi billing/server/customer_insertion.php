<?php 
	$customer_name="";
	$customer_place="";
	$customer_mobile="";

	$db = mysqli_connect('localhost','root','','parvathi');
	if(isset($_POST['submit'])){
		$customer_name=($_POST['customer_name']);
		$customer_place=($_POST['customer_place']);
		$customer_mobile=($_POST['customer_mobile']);
		
			$customer="INSERT INTO Customer(Customername, Customerplace, Phone) 
				    VALUES('$customer_name','$customer_place', '$customer_mobile')"; 
			 
		mysqli_query($db, $customer);
		echo "Data Added";

	}

?> 