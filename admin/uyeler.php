<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title> Üyeler </title>
		<style type="text/css">
					
		table{ text-align: center; }
		td { background-color: white; color: brown; font-family: calibri;}
		h2 { text-align: center; font-family: calibri;}
		a:hover  {  text-decoration: none; color: red; font-size: 18px;}
		tr:hover {background-color: lightgray;}

		</style>	


</head>
<body>

	<h2> Üye Bilgileri </h2>
	<table width="800" align="center" border="2" >
		<tr bgcolor="yellow">
			<th> Üye NO </th>
			<th> Üye Adı </th>
			<th> Üye Şifre </th>
			<th> Üye Email </th>
			<th> Üye Sil </th>
			
		</tr>	
		<tr>
<?php 		
	include "../includes/baglan.php";	

	$query = mysql_query("SELECT * FROM uyeler");

		while ($row = mysql_fetch_array($query)) {
				
			$id = $row['id'];
			$user_name = $row['user_name'];
			$user_pass = $row['user_pass'];
			$user_email = $row['user_email'];
		

?> 
				<td> <?php echo  $id;  ?> </td>
				<td>  <?php echo  $user_name;  ?>  </td>
				<td>  <?php echo  $user_pass;  ?>  </td>
				<td>  <?php echo  $user_email;  ?>  </td>
				<td>  <a href="uyesil.php?sil=<?php  echo $id; ?>"> Sil </a>  </td>		

		</tr>

	
<?php  } ?> <!-- sadece bu satırı döndürmek istedimiz için burda kapatıyoruz while döngüsünü -->

	</table>
	
</body>
</html>