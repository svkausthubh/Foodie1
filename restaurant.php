<?php
include("config.php");
$query = "SELECT * FROM restaurant where RES_ID = '1'";
$r = $db->query($query);
$row = $r->fetch_assoc();
echo $row["NAME"];
?>