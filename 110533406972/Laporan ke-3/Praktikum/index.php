<em><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
</em>
<html> 
<head> 
<title>Praktikum-Ifa</title>
<script type="text/javascript">
function error1()
{ 
alert('Silahkan Masukkan Username and Password!');
}
function check()
{
if(LoginForm.password.value == "" || LoginForm.username.value=="")
{
error1();
}
}
</script>
<style type="text/css">
#mainbox {
 position: static;
 width:540px;
 height:280px;
 z-index:1;
 left: 10px;
 top: 10px;
 background-color: #66ffff;
}
#textbox {
 position:absolute;
 width:305px;
 height:101px;
 z-index:2;
 top: 90px;
 left: 500px;
}
#buttom {
 position:absolute;
 width:80px;
 height:25px;
 z-index:2;
 left: 478px;
 top: 166px;
}
#body{
width:240px;
height:230px;
}
.style3 {font-family: "Times New Roman", Times, serif; color: #000000; }
.style4 {
	color: #000000;
	font-weight: bold;
}
</style>
<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>
</head>
<body onLoad="document.LoginForm.username.focus();"> 
<em>
<body background="back1.jpeg">
</em>
<form name="formsederhana" method="post" action="praktikum.php" name="login" method="post" onSubmit="return validasi(this)"> 
<center>
<div id="mainbox" align = "center">
<h1> <font color= "Black">Form Login Sederhana </h1>
</div> 
<div id="body">
<div id="textbox"> 
<div align="left"><strong><span class="style3">Username</span></strong><span class="style4">:</span><em> 
    <input type="text" name="username"  width="50" value="" style="background-color:#ffffff" autocomplete="off"> 
    <br> 
    <br> 
    </em><strong><span class="style3">Password</span></strong><span class="style4">: </span><em> 
    <input type="password" name="password" width="50" style="background-color:#ffffff" autocomplete="off"> 

        </em></div> 
</div> 
<div id="buttom">
  <em>
  <input type="submit" name="submit" value="Login" onClick="check()">
  </em></div> 
</div>
<em>
</div> 
</em>
</form> 
</body> 
</html>
