<?php
require_once("dbcredentials.php");
require_once("logs.php");

/**
 * Developed by ,
 */
class quiz extends DBCredentials
{
	private $classname = "quiz";
	private $logs = "";
	private $myconn = "";
	private $myerr = 0;

	public function __construct()
	{
		$this->logs = new Logs();
		$this->myconn = new mysqli($this->getHost(),$this->getUser(),$this->getPass(),$this->getDb());

		if (mysqli_connect_errno()) {
			$this->myerr = mysqli_connect_errno();
		}
	}

	/*<?php if(!empty($res['id']) && $res['status']==1){ echo '<div class="alert alert-success"> Grievance ID: '.$res['id'].' submitted successfully</div>'; } ?>*/



	public function addoption($pixelid,$qno){
		$myname = $this->classname." - addoption - ";
		$res = array();
		$res['status'] = 0;
		$optn=0;

		if($this->myerr==0 && !empty($this->myconn)){
			
		
			
			  $sqlqry = "INSERT INTO `userans`(`pixelid`,`qno`,`optn`) VALUES (?,?,?)";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("sdd",$pixelid,$qno,$optn);
				if($stmt->execute()){
					if($this->myconn->affected_rows){
					  $res['status'] = 1;
					  $res['rows_affected'] = $this->myconn->affected_rows;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	
	public function getpwdbyid($pixelid){
		$res = array();
		$res['status'] = 0;
        $myname = $this->classname." - getpwdbyid - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `pwd` FROM `details` WHERE `pixelid`=?";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("s",$pixelid);
				if($stmt->execute()){
					$stmt->bind_result($pwd);
					while($stmt->fetch()){
						$res['status'] = 1;
						$res['pwd']=$pwd;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	public function updoption($pixelid,$qno,$optn){
		$myname = $this->classname." - updoption - ";
		$res = array();
		$res['status'] = 0;

		if($this->myerr==0 && !empty($this->myconn)){
			
		  $sqlqry = "UPDATE `userans` SET `optn`=? WHERE `pixelid`=? and `qno`=?";
		  if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("dsd",$optn,$pixelid,$qno);
				if($stmt->execute()){
					if($this->myconn->affected_rows){
					  $res['status'] = 1;
					  $res['rows_affected'] = $this->myconn->affected_rows;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}

	public function getoption($pixelid,$qno){
		$res = array();
		$res['status'] = 0;
        $myname = $this->classname." - getoption - ";
		if($this->myerr==0 && !empty($this->myconn)){
			  $sqlqry = "SELECT `optn` FROM `userans` WHERE `pixelid`=? and `qno`=?";
			if ($stmt = $this->myconn->prepare($sqlqry)) {
				$stmt->bind_param("sd",$pixelid,$qno);
				if($stmt->execute()){
					$stmt->bind_result($option);
					while($stmt->fetch()){
						$res['status'] = 1;
						$res['option']=$option;
					}
				}
				else{
					$this->logs->errLog($myname."Statement not executed".$this->myconn->error);
				}
			}
			else{
				$this->logs->errLog($myname."Not prepared");
			}
		}
		else{
			$this->logs->errLog($myname."Mysqli Error or else");
		}

		return $res;
	}
	
	
	


	
	

	public function __destruct(){
		if(!empty($this->myconn)){
		  $this->myconn->close();
		}
	}

}

 ?>
