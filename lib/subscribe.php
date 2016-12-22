<?php
	require('mailin.php');
	$mailin = new Mailin("https://api.sendinblue.com/v2.0","");
	$data = array( "email" => $_POST["EMAIL"],
		"listid" => array()
	);

	if($_POST["you_dirty_bot"] != ""){
		die;
	}else{
		var_dump($mailin->create_update_user($data));
	}
?>