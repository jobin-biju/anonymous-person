<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$c=$_COOKIE['lkey'];
$x=$obj->postmortemview_hospital($c);
$smartyObj->assign("data",$x);
$smartyObj->display("hospitalsubheader.tpl");
$smartyObj->display("postmortemrqstview.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:index.php");
}
?>