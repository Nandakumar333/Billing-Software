<?php
ob_start();

 $db = new mysqli("localhost","root","");
   if($db->connect_errno > 0){
         die('Unable to connect to database [' . $db->connect_error . ']');  } 
     
	 $db->query("CREATE DATABASE IF NOT EXISTS `parvathi`");
	 
             mysqli_select_db($db,"parvathi"); 	  
								  
                     
						$stable56="CREATE TABLE IF NOT EXISTS Customer (id int(11) NOT NULL auto_increment,
                                  Customername varchar(300)NOT NULL, 
                                  Customerplace varchar(300)NOT NULL,                             
                                  Phone varchar(30)NOT NULL,                                 
                                  PRIMARY KEY(id) )";
                         $db->query($stable56);  
                    
		                      $stableZ="CREATE TABLE IF NOT EXISTS Product (id int(11) NOT NULL  auto_increment,
                 					productname varchar(30)NOT NULL,
                 					productprice varchar(30)NOT NULL,
                 					PRIMARY KEY(id) )";
               					$db->query($stableZ);
                 
					
              
                         
?>