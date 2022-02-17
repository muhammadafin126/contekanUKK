<?php
if(isset($_SESSION['user_id'])){
	if($SESSION['role_id'] == 1){
		header('location:index.php');
	}

}else {
	$SESSION['error'] = 'anda harus login';
	header('location:login.php');
}
?>