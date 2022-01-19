<?php 
include 'ok.php';
$id =$_GET['id'];
$sql = $db->query("DELETE FROM berita WHERE id= '$id'");
header("location:halaman_admin.php");
?>