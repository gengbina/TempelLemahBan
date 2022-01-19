<?php include 'ok.php';?>
<form method="post">
<table cellpadding="1">
<tr>
<td>nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>alamat</td><td>:</td><td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>paket</td><td>:</td><td><input type="text" name="paket"></td>
</tr>
<tr>
<td>jumlah</td><td>:</td><td><input type="text" name="jumlah"></td>
</tr>
<td><button type="submit" name="tambah">tambah</button></td>
</table>
</form>
<?php
if (isset($_POST['tambah'])) {
	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$paket =$_POST['paket'];
	$jumlah =$_POST['jumlah'];
	
	$q=$db -> query("INSERT INTO pemesanan SET nama='$nama', alamat='$alamat', paket='$paket', jumlah='$jumlah'");
	var_dump($q);
	if($q){
		echo"<script>window.alert('BERHASIL');window.location=('qw.php')</script>";
	}else{
		echo"<script>window.alert('GAGAL');window.location=('add.php')</script>";
	}
}
?>