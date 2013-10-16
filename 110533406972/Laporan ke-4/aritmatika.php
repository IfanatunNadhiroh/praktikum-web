<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aritmatika</title>
<h1 style="border-bottom-style:double"> OPERASI ARITMATIKA </h1>
<script type="text/javascript">
function isInteger(s)
{
      var i;
	s = s.toString();
      for (i = 0; i < s.length; i++)
      {
         var c = s.charAt(i);
         if (isNaN(c)) 
	   {
		alert("Given value is not a number");
		return false;
	   }
      }
      return true;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi Aritmatika</title>
</head>
<form name="input" method="post">
<table> 
		<tr>
			<td>Bilangan 1</td>
			<td> : </td>
			<td><input type="number" name="bil1" value="<?php
echo isset($_POST['bil1']) ? $_POST['bil1'] : '';
?>"></td>
		<td>
		<select name="kalkulator" size=1>
			<option value="plus" <?php if (isset($_POST['kalkulator']) && $_POST['kalkulator']=='plus') {echo "selected";} ?>
			>+</option>
			
			<option value="minus" <?php if (isset($_POST['kalkulator'])&&$_POST['kalkulator']=='minus') {echo "selected";} ?>
			>-</option>
			
			<option value="bagi" <?php if (isset($_POST['kalkulator'])&&$_POST['kalkulator']=='bagi') {echo "selected";} ?>
			>/</option>
			
			<option value="kali" <?php if (isset($_POST['kalkulator'])&&$_POST['kalkulator']=='kali') {echo "selected";} ?>
			>*</option>	
		</select>
		</td>
		<td>
		  <td>Bilangan 2</td>
			<td> : </td>
			<td><input type="number" name="bil2" value="<?php
echo isset($_POST['bil2']) ? $_POST['bil2'] : '';
?>">
		</td>
		<td>
		<input type="submit" value="=" />
</form>
		<td>Hasil</td>
			<td> : </td>
			<td><textarea disabled="disabled">
			<?php
			$a=$_POST['bil1'];
			$b=$_POST['bil2'];
			$hasil=$_POST['kalkulator'];
			
			if (isset($hasil)) {
			$plus=$a+$b;
			$minus=$a-$b;
			$bagi=$a/$b;
			$kali=$a*$b; 
			}
			
			if ($hasil=="plus") { echo "$plus"; }
			if ($hasil=="minus") { echo "$minus"; }
			if ($hasil=="bagi") { echo "$bagi"; }
			if ($hasil=="kali") { echo "$kali"; }
			?>
			</textarea></td>
		<td>
		</tr>
	</table>

<body bgcolor="#CCFF33">
</body>
</html>
