<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml " xml:lang="en" lang="en">
<head>
<title>Studi Kasus 1-Ifanatun</title>
</head>

<body>
<center>
<?php
function waktu()

{
	date_default_timezone_set("Asia/Jakarta");
	$jam=date ("H:i:s");
	echo "Hai Ifa <br>";
	echo "Sekarang Menunjukkan <br>";
	echo 'Pukul ';echo $jam;
	if($jam>=0 && $jam<=10)
	{echo ': Selamat Pagi';}
	if($jam>=11&&$jam<=14)
	{echo ': Selamat Siang';}
	if($jam>=15&&$jam<=18)
	{echo ': Selamat Sore';}
	if($jam>=19&&$jam<=23)
	{echo ': Selamat Malam';}
} 
waktu();
?>

</body>
</html>