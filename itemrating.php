<?php
	include("config.php");
	if(isset($_POST['itrate'])){
		$mnrating = mysqli_real_escape_string($db, $_POST['mnrating']);
		$fid = mysqli_real_escape_string($db, $_POST['fid']);
		$q = "SELECT * FROM food WHERE fid = '$fid'";
		$r = $db->query($q);
		$row = $r->fetch_assoc();
		$nr = $row["nrated"];
		$rate = $row["rating"];
		$rate = $rate*$nr;
		$nr++;
		
		$rate = ($rate+$mnrating)/$nr;
		$rate = round($rate,2);
		$qr = "UPDATE food SET rating='$rate', nrated = '$nr' WHERE fid = '$fid'";
    	$ru = $db->query($qr);
    	header("location: menu.php");
	}

?>