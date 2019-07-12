<?php
@session_start();
  require_once("add_defaultans.php");
  $obj=new quiz();
  $res = $obj->getoption($_SESSION['pixelid'],$_POST['qno']);
  $qno=$_POST['qno']+1;
  if($_POST['qno']==45)
  {
    $qno=1;
  }
                      $path="Location:/pxlquiz/questions/".$qno.".php";
       if(!empty($res['status']) && $res['status']==1){
              if($res['option']!=$_POST['option']){
                   $ures = $obj->updoption($_SESSION['pixelid'],$_POST['qno'],$_POST['option']);
                    if(!empty($ures['status']) && $ures['status']==1){
                       echo "good boy";

                       header($path);
    
                        }
                        else
                        {
                          echo "not updated crctly";
                        }

                    }
                    else{
                      
                      header($path);
                    }


          
 
}
  else{
	  echo "sorry";
  }
  



 ?>
 
   