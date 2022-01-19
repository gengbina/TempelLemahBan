<?php include 'ok.php';?>
<form method="post">
<table cellpadding="1">
<tr>
<td>gambar</td><td>:</td><td><input type="text" name="gambar"></td>
</tr>
<tr>
<td>nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<td><button type="submit" name="tambah">tambah</button></td>
</table>
</form>
<?php
if (isset($_POST['tambah'])) {
	$gambar =$_POST['gambar'];
	$nama =$_POST['nama'];
	
	$q=$db -> query("INSERT INTO gambar SET gambar='$gambar', nama='$nama'");
	var_dump($q);
	if($q){
		echo"<script>window.alert('BERHASIL');window.location=('halaman_admin.php')</script>";
	}else{
		echo"<script>window.alert('GAGAL');window.location=('tambah_gambar.php')</script>";
	}
}
?>