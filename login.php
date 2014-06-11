<?php

	session_start();	

?>

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
	
		<form action="login_sonuc.php" method="post">
			
			<table  width="400" border="1" align="center" bgcolor="PowderBlue">
				<tr > <td colspan="2" align="center	">  <h2> Giriş Formu </h2> </td>  </tr>
				
				
				
				<tr >
					<td align="center"> e-mail </td>
					<td><input type="text" name="email"  size="25"/> </td>
				</tr>

				<tr >
					<td align="center"> Şifre</td>
					<td> <input type="password" name="sifre" size="25"/> </td>
				</tr>
				

				<tr align="center">
					
					<td colspan="2" align="center"><input type="submit" name="login" value="Login" /></td>
				</tr>

			</table>

		</form>

		 <p>  henüz üye olmadınız mı ? <a href="index.php"> Üye ol </a> </p> 
			
<?php  // Giris Yap ve Kayıt Ol ?>

</body>
</html>
