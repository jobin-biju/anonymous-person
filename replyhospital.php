<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$c=$_COOKIE['lkey'];
$x=$obj->replyhospital_view($c);
$smartyObj->assign("data",$x);
$smartyObj->display("policesubheader.tpl");
$smartyObj->display("replyhospital.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:index.php");
}

?>