<?php include 'ok.php';?>
<form method="post">
<table cellpadding="1">
<tr>
<td>judul</td><td>:</td><td><input type="text" name="judul"></td>
</tr>
<tr>
<td>pengirim</td><td>:</td><td><input type="text" name="pengirim"></td>
</tr>
<tr>
<td>topik</td><td>:</td><td><input type="text" name="topik"></td>
</tr>
<td><button type="submit" name="tambah">tambah</button></td>
</table>
</form>
<?php
if (isset($_POST['tambah'])) {
	$judul =$_POST['judul'];
	$pengirim =$_POST['pengirim'];
	$topik =$_POST['topik'];
	
	$q=$db -> query("INSERT INTO berita SET judul='$judul', pengirim='$pengirim', topik='$topik'");
	var_dump($q);
	if($q){
		echo"<script>window.alert('BERHASIL');window.location=('halaman_admin.php')</script>";
	}else{
		echo"<script>window.alert('GAGAL');window.location=('tambah_berita.php')</script>";
	}
}
?>