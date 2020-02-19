<?php
	session_start();

	if( isset($_REQUEST['submit']))
	{
		$Name = $_REQUEST['Name'];

		if(empty(trim($Name)))
		{
			echo "Blank Submission";
		}
		else
		{
			if(trim($Name[0]) == $Name)
			{
				$_SESSION['Name'] = $Name;
				header("location : Name.php");
			}
			else
			{
				echo " Invalid Name "
			}
		}
	}
?>