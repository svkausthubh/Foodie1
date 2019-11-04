<?php
	include("config.php");
	error_reporting(0);
	$query = "SELECT * FROM restaurant ";
    $result = $db->query($query);
    while ($row = $result->fetch_assoc()) {
    	$i  = $row["RES_ID"];
    	$q = "SELECT * FROM food WHERE RES_ID = '$i'";
    	$r = $db->query($q);
    	$avgr = 0;
    	$c = 0;
    	while ($rowmenu = $r->fetch_assoc()) {
    		$avgr = $avgr + $rowmenu["rating"];
    		$c++;
    	}
    	// echo $c."pk  ";
    	$avgr = $avgr/$c;
    	// echo $avgr;
    	$qr = "UPDATE restaurant SET RATING='$avgr' WHERE RES_ID = '$i'";
    	$ru = $db->query($qr);
    }

?>