<?php
  require_once("add_defaultans.php");
  $obj = new quiz();
  for($i=1;$i<46;$i++){
  $res = $obj->addoption("pixel2k190558",$i);
  if(!empty($res['status']) && $res['status']==1){
	  echo "inserted default answers";
	  
  }
  else{
	  echo "sorry";
  }
  }



 ?>
 
   