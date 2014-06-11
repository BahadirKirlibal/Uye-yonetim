<?php

	include "includes/baglan.php";

		




	if (isset($_POST['submit'])){
			
			$user_name = $_POST['ad'];
			$user_pass = $_POST['sifre'];
			$user_email = $_POST['email'];

		if ( $user_name=="" ) {
			
			echo "<script> alert('Lütfen İsim giriniz !') </script>";
			header("Refresh:0 ;index.php");
			exit();
		}
		if ( $user_pass=="" ) {
			
			echo "<script> alert('Lütfen Şifre giriniz !') </script>";
			header("Refresh:0 ;index.php");
			exit();
		}
		if ( $user_email=="" ) {
			
			echo "<script> alert('Lütfen E-mail adresi giriniz') </script>";
			header("Refresh:0 ;index.php");
			exit();
			
		}
		
		// böle bir email kaydı varmı diye kontrol ediyoruz

		$check_email = "SELECT * FROM uyeler WHERE user_email='$user_email'";

		$run = mysql_query($check_email);

		if (mysql_num_rows($run) > 0) {// böle bir kayıt varsa hata mesajı yazdırıyoruz 

			echo "<script> alert(' email $user_email zaten alınmış başka dene') </script>";
			header("Refresh:0 ;index.php");
			
		}else{

			
		$query = mysql_query("INSERT INTO uyeler (user_name,user_pass,user_email) VALUES ('$user_name','$user_pass','$user_email')");
		
		if ($query) {
			
			echo "<script> alert(' Kayıt başarılı ') </script>";
			header("Refresh:0; hosgeldin.php");
		}else {

			echo "hata".mysql_error();

		}
			


			
		}

		
	}





?>