<?php
	include("config.php");
	session_start();
	// echo $_SESSION['menu'];
	$price = 0;
	$orderid = "#".rand(1000000,9999999); 
	if(isset($_POST['submit'])){//to run PHP script on submit
		if(!empty($_POST['check_list'])){
			// Loop to store and display values of individual checked checkbox.
			foreach($_POST['check_list'] as $selected){
				$q = "SELECT * FROM food WHERE fid = '$selected'";
				$r = $db->query($q);
				$row = $r->fetch_assoc();
				$price = $price+$row["price"];
				$fitem = $row["fname"];
				$resid = $_SESSION['menu'];
				$qit = "INSERT INTO orderitems (items , orderid , Resid) VALUES('$fitem','$orderid','$resid')";
				$rit = $db->query($qit);


			}
		}
		
		$email = $_SESSION['email'];
		$qr ="INSERT INTO ordering (email , orderid , bill ) VALUES('$email','$orderid','$price')";
    	$ru = $db->query($qr);
    	// echo "string";
    	header("location: orderList.php");
	}

?>