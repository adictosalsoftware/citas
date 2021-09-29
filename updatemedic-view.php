<?php

if(count($_POST)>0){
	$user = MedicData::getById($_POST["user_id"]);

	$category_id = "NULL";

print "<script>window.location='index.php?view=medics';</script>";

}
?>
