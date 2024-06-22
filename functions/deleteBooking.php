<?php 

include("../db.php");

$id = intval($_GET["id"]);
$sql = "DELETE FROM roombook WHERE id = '$id'";

if(!mysqli_query($con, $sql)) {
	echo "<script>alert('Delete Booking Failed'); window.history.go(-1);</script>";
	exit();
} else {
	echo "<script>alert('Delete Booking Successfully'); window.location='../admin/home.php';</script>";
	exit();
}

?>