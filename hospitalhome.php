<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display("hospitalmainheader.tpl");
$smartyObj->display("footer.tpl");
?>

