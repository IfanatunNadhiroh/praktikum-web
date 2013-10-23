<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Halaman Administrator</title>
<h1 style="background-color:#CC3333" align="center"> Autentikasi-Session </h1>
<style type="text/css">
.inner {
margin: 70px auto;
padding: 20px;
width: 240px;
border: 10px solid#CC3333;
}
</style>
</head>
<body>
<?php
ini_set('display_errors', 1);
define('_VALID', 1);
// include file eksternal
require_once('./auth.php');
init_login();
validate();
?>
<h3 style align="center">Selamat datang di halaman administrator</h3>
<p style="border:double" align="center"> Ini adalah halaman utama administrator
<br> 
<a href="?m=logout">Logout</a>
</p>

</body>
</html>