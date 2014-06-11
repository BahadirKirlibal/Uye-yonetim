
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login Sayfası </title>
		<style type="text/css">
		body{
			background:  url('images/bgimage.jpg');
		}
		p { color:red; font-size: 14px; text-align: center;}





		</style>


</head>
<body>
	
		<form action="" method="post">
			
			<table  width="400" border="1" align="center" bgcolor="PowderBlue">
				<tr > <td colspan="2" align="center	">  <h2> Admin Girişi </h2> </td>  </tr>
				
				
				
				<tr >
					<td align="center"> Admin Adı  </td>
					<td><input type="text" name="admin_name"  size="25"/> </td>
				</tr>

				<tr >
					<td align="center"> Admin Şifre </td>
					<td> <input type="password" name="admin_pass" size="25"/> </td>
				</tr>
				

				<tr align="center">
					
					<td colspan="2" align="center"><input type="submit" name="admin_login" value="Login" /></td>
				</tr>

			</table>

		</form>

		
			
<?php  // Giris Yap ve Kayıt Ol ?>

</body>
</html>
<?php

	include "../includes/baglan.php";

	if (isset($_POST['admin_login'])) {

		$admin_name = $_POST['admin_name'];
		$admin_pass = $_POST['admin_pass'];

		// admin kullanıcısını veritabanında olup olmadını kontrol ediyoruz 

		$query = "SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_pass='$admin_pass'";

		$run = mysql_query($query);

		if (mysql_num_rows($run) > 0) { // eğer admin kullanıcı varsa 
			
			header("Refresh: 0; uyeler.php");

		}else{

			echo "<script> alert(' admin bilgileri yanlış ! ') </script>";

		}
	}




?>
