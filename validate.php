<?php
  require_once("add_defaultans.php");
  $obj = new quiz();
  $res = $obj->getpwdbyid("pixel2k199999");
  if(!empty($res['status']) && $res['status']==1){
	  echo $res['pwd'];
	  
  }
  else{
	  echo "sorry";
  }
  



 ?>
 
   