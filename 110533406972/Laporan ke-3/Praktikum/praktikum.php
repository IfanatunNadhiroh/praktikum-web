<html>
  <head>
    <link rel="stylesheet" href="main.css" type="text/css" />
    <script type="text/javascript" src="jquery-1.4.js"></script>
	<script type="text/javascript" src="jquery.maskedinput.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
  	    $(':input:not([type="submit"])').each(function() {
	        $(this).focus(function() {
	            $(this).addClass('hilite');
	        }).blur(function() {
	            $(this).removeClass('hilite');});
	     });
      });  
    </script>    
    <style>   
      .hilite{
	       background-color: #FDECB2;
      }
    </style>   
	<script type="text/javascript">
      $(document).ready(function() {
        $("#tgl").mask("99/99/9999")
        $("#telp_skrg").mask("(9999) 999-9999")
		$("#telp_asal").mask("(9999) 999-9999")
		$("#hp").mask("+(62) 99999999999")
      });
    </script>
	<script type="text/javascript">
      $(document).ready(function() {
            $('#deskripsi_diri').keyup(function() {
                var len = this.value.length;
                if (len >= 150) {
                    this.value = this.value.substring(0, 150);
                }
                $('#hitung').text(150 - len);
            });
      });
    </script>
	<script type="text/javascript">
function validasi(form){
if (form.nama.value == ""){
alert("Anda belum mengisikan Username");
form.nama.focus();
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
  <body OnLoad="document.login.nama.focus();">
  <body>
   <?php 
   if(($_POST['username']=='admin') AND ($_POST['password']=='admin')) { 
	echo 'LOGIN BERHASIL ';
	echo '<br><br>Selamat datang ' . $_POST['username']; 
	} 
	else { 
	echo "<body text='red'><strong>Masukkan username dan password berupa string<br><a href='form-login.php'>
	Kembali
	Login</h4></a></strong></body>"; 
	} 
	?> 
  </body>
</html>