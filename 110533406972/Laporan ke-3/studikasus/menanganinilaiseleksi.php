<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Seleksi</title>
</head>
<body>
    <div class="demo" style="width: 600px;">
    <form>
	<h1 align="center">Studi Kasus 1 </h1>
	   <div><label for="nama">Username</label>
		      <input type="text" name="nama" id="nama">
	   </div>
	   <div><label for="password">Password</label>
		      <input type="password" name="password" id="password">
	   </div>
      </form>
    </div>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan
<select name="job">
<option value="Mahasiswa">Mahasiswa
<option value="ABRI">ABRI
<option value="PNS">PNS
<option value="Swasta">Swasta
</select> <br />
<input type="submit" value="ok" />
</form>
<?php
if (isset($_POST['job'])) {
echo $_POST['job'];
}
?>
</body>
</html>