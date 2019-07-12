<?php
@session_start();
unset($_SESSION['pixelid']);
unset($_SESSION['pwd']);
@session_destroy();
header('Location:./index.php');
?>