<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$smartyObj->display("admin.tpl");
}
else
{	
	Header("location:index.php");
}
?>