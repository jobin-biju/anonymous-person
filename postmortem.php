<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$x=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
        $obj->postmortem($_FILES['file'],$x);
}
$smartyObj->display("hospitalsubheader.tpl");
$smartyObj->display('postmortem.tpl');
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:index.php");
}
?>