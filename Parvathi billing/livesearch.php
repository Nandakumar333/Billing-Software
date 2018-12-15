<?php
//$xmlDoc=new DOMDocument();
//$xmlDoc->load("links.xml");
$con = mysqli_connect('localhost','root','','parvathi');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"parvathi");

$q=$_GET["q"];

//$sql = "SELECT Customername FROM customer";



$query = "SELECT Customername FROM customer ORDER BY Customername";
$x = $con->query($query);
$row = $x->fetch_assoc();
if ($stmt = $con->prepare($query)) {

    /* execute query */
    $stmt->execute();

    /* store result */
    $stmt->store_result();

    printf("Number of rows: %d.\n", $stmt->num_rows);

    /* close statement */
}
if(strlen($q)>0) {
  $hint="";
  for($i=0; $i<($stmt->num_rows); $i++) {
    $y=$x->item($i)->$row["Customername"];
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<p>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</p>";
        } else {
          $hint=$hint . "<br /><p>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</p>";
        }
       }
    }
   }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>