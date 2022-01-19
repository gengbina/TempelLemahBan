<html>
<head>
 <title>LOGIN</title>
 <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<style>
body {
  background-image: url("bg.jpg");
}
</style>
<body>

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <p class="tulisan_atas">Login</p>
  <p >gunakan username :user dan password: user untuk masuk ke halaman user</p>
  <p >gunakan username :admin dan password: admin untuk masuk ke halaman admin</p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">

   <br/>
   <br/>
   
  </form>
  
 </div>


</body>
</html>