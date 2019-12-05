<?php 
function deconnect(){
	if(isset($_SESSION['id'])){
		$_SESSION = array();
		session_destroy();
		setcookie('email', '');
	}
}
?>