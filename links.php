<?php
@session_start();
require_once('header.php');
if(!empty($_SESSION['pixelid']) && !empty($_SESSION['pwd'])){
	//echo 'q1';

	require_once("add_defaultans.php");
	$obj=new quiz();
	for($i=1;$i<46;$i++){
	$qno=$i;
	$res = $obj->getoption($_SESSION['pixelid'],$qno);
	//require_once('../navbar.php');
	//echo 'q1';
       if(!empty($res['status']) && $res['status']==1){
       //	var_dump($res);
           
			$dqno=str_pad($qno,2,"0",STR_PAD_LEFT);
			
		    $path='href="/pxlquiz/questions/'.$qno.'.php"';
		    if($res['option']!=0)
		    {     
		    	if($i%9!==0)
			      echo '<a '.$path.' class="btn btn-success">'.$dqno.'</a>';
			    else
			    	echo '<a '.$path.' class="btn btn-success">'.$dqno.'</a><br />';

		     }
		     else
		     {
		     	 if($i%9!==0)
			      echo '<a '.$path.' class="btn btn-danger">'.$dqno.'</a>';
			    else
			    	echo '<a '.$path.' class="btn btn-danger">'.$dqno.'</a><br />';

		     }



		
       		

	}
}
	
}
else{
	header('Location:./index.php');
    }
require_once('footer.php');
?>