<?php		
	INCLUDE '../config.php';
	INCLUDE '../functions.php';
	
	$USER = $_GET['user'];
		
	IF(ISSET($USER) && IN_ARRAY(HTMLSPECIALCHARS($USER), $ALLOWED_USERS))
	{
		$USER = HTMLSPECIALCHARS($USER);
		
		mysqliUserNodes($USER);		
	}
	ELSE
	{
		ECHO 'ERROR';	
	}
	
?>