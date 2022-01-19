<?php 
include 'ok.php';
$id =$_GET['id'];
$sql = $db->query("DELETE FROM pemesanan WHERE id= '$id'");
header("location:qw.php");
?>