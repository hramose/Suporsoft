<?php
/**
* @author Comsoft México
**/
$user = TicketData::getById($_GET["id"]);
$user->del();
print "<script>window.location='index.php?view=tickets';</script>";

?>