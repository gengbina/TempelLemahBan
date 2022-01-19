<?php include 'ok.php';?>
<form method="post">
<table cellpadding="1">
<tr>
<td>nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>isi</td><td>:</td><td><input type="text" name="isi"></td>
</tr>
<td><button type="submit" name="tambah">tambah</button></td>
</table>
</form>
<?php
if (isset($_POST['tambah'])) {
	$nama =$_POST['nama'];
	$isi =$_POST['isi'];
	
	$q=$db -> query("INSERT INTO komen SET nama='$nama', isi='$isi'");
	var_dump($q);
	if($q){
		echo"<script>window.alert('BERHASIL');window.location=('qw.php')</script>";
	}else{
		echo"<script>window.alert('GAGAL');window.location=('tambah_komen.php')</script>";
	}
}
?>