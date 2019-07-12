<?php
@session_start();
if(!empty($_POST['pixelid']) && !empty($_POST['pwd']))
{
  require_once("add_defaultans.php");
  $obj = new quiz();
  $res = $obj->getpwdbyid($_POST['pixelid']);
  if(!empty($res['status']) && $res['status']==1){
	  
	  if($_POST['pwd']==$res['pwd']){
	  $_SESSION['pixelid']=$_POST['pixelid'];
	$_SESSION['pwd']=$_POST['pwd'];
	header('Location:./instructions.php');
  }
       else
       {
       	header('Location:/pxlquiz/index.php');
       }

	  
  }
  else
  {
	  echo "sorry";
  }
  
}	

	
else
{
	header('Location:./index.php');
}
?>