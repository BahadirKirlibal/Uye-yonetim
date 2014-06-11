
<?php 
session_start();
include "includes/baglan.php";

		if (isset($_POST['login'])) {
			
			$email = $_POST['email'];
			$sifre = $_POST['sifre'];


			$check_user = "SELECT * FROM uyeler WHERE user_pass='$sifre' AND user_email='$email'";

			$run = mysql_query($check_user);

			if (mysql_num_rows($run) > 0) {
				
				$_SESSION['email'] = $email;  // burda üye vs girişi için session atıyoruz.


				header("Refresh:0; hosgeldin.php");

			}else {

				echo "<script> alert('şifre yada email yanlış') </script>";
				header("Refresh:0; login.php");

			}

		}




?>