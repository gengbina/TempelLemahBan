<?php include 'ok.php';
$id=$_GET['id'];
$q=$db->query("SELECT * FORM pemesanan WHERE id='$id'");
foreach ($q as $row) {}

?>
<form method="post">
<table cellpadding="1">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
<tr>
<td>nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>alamat</td><td>:</td><td><input type="text" name="alamat" ></td>
</tr>
<tr>
<td>paket</td><td>:</td><td><input type="text" name="paket" ></td>
</tr>
<tr>
<td>jumlah</td><td>:</td><td><input type="text" name="jumlah" ></td>
</tr>
<td><button type="submit" name="simpan">edit</button></td>
</table>
</form>
<?php
if (isset($_POST['simpan'])) {
	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$paket =$_POST['paket'];
	$jumlah =$_POST['jumlah'];
	
	$q=$db -> query("UPDATE pemesanan SET nama='$nama', alamat='$alamat', paket='$paket', jumlah='$jumlah' WHERE id='$id'");
	var_dump($q);
	if($q){
		echo"<script>window.alert('BERHASIL');window.location=('qw.php')</script>";
	}else{
		echo"<script>window.alert('GAGAL');window.location=('edit.php')</script>";
	}
}
?>