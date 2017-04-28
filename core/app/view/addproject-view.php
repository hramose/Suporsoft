<?php
/**
* BookMedik
* @author Comsoft México
* @url www.communitysw.comabout/
**/

if(count($_POST)>0){
	$user = new ProjectData();
	$user->name = $_POST["name"];
	$user->add();

print "<script>window.location='index.php?view=projects';</script>";


}


?>