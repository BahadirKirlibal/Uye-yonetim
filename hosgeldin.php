<?php 


	session_start();	

	if (!$_SESSION['email']) { // eğer session yoksa  login.php ye yönlendir
			
		header("Location: login.php");

	}
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
		h2{ text-align: right; margin-right: 15px; margin-top: 15px; }
		h2 a{ text-decoration: none; }
		p { color: red; font-size: 20px; }


		</style>


</head>
<body>
	<b> Hoşgelgin </b><br />
	<p> <?php echo $_SESSION['email']; 	 ?> </p>	
	<h2><a href="logout.php"> Çıkış Yap</a></h2>



</body>
</html>

