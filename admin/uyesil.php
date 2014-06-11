<?php

 include "../includes/baglan.php";

 $sil_id = @$_GET['sil'];

 $query = mysql_query("DELETE FROM uyeler WHERE id='$sil_id'");

 if($query){

 	header("Refresh:0; uyeler.php");

 }else {


 	echo "hata".mysql_error();

 }



?>