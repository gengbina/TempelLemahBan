<?php include 'ok.php';?>
<form method="post">
<table cellpadding="1">
<tr>
<td>link</td><td>:</td><td><input type="text" name="link"></td>
</tr>
<tr>
<td>judul</td><td>:</td><td><input type="text" name="judul"></td>
</tr>
<td><button type="submit" name="tambah">tambah</button></td>
</table>
</form>
<?php
if (isset($_POST['tambah'])) {
	$judul =$_POST['judul'];
	$link =$_POST['link'];
	
	$q=$db -> query("INSERT INTO video SET judul='$judul', link='$link'");
	var_dump($q);
	if($q){
		echo"<script>window.alert('BERHASIL');window.location=('halaman_admin.php')</script>";
	}else{
		echo"<script>window.alert('GAGAL');window.location=('tambah_video.php')</script>";
	}
}
?>