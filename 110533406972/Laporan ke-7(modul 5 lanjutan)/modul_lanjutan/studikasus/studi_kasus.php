<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
require_once('../../assets/koneksi.php');
?>
  <form method="GET" action="" name="frm_select"> 
  Tampilkan 
  <select name="row_page" 
onchange="document.forms.frm_select.submit();"> 
    <option>-- pilih --</option> 
    <option value=5>5</option> 
    <option value=10>10</option> 
    <option value=20>20</option> 
    <option value=50>50</option> 
    <option value=100>100</option>	
  </select> baris per halaman. 
  </form>

 <?
  $row = $_GET['row_page'];
  if($row==5) {
  header('location:5.php');
  }
  elseif($row==10) {
  header('location:10.php');
  }
  elseif($row==20) {
  header('location:20.php');
  }
  elseif($row==50) {
  header('location:50.php');
  }
  elseif($row==100) {
  header('location:100.php');
  }
  ?>