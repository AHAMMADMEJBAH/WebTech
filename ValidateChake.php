<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
        $email =  $_REQUEST['email'];
        $gender =  $_REQUEST['gender'];
		
		if($name == " ")
		{
			echo "Please Enter your name";
		}
	}
?>


