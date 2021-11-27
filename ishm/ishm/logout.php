<?php
	session_start();
	if ( $_SESSION )
	{
		foreach ( $_SESSION as $key )
		{
			unset($_SESSION[$key]);
		}

		session_destroy();
	}
?>

<html>
<head>
	<title>Logging Out...</title>
	<meta http-equiv="refresh"
		content="3;url=http://hercules.blogdns.com/~ishm/index.php">
	<link rel="SHORTCUT ICON"
		href="http://hercules.blogdns.com/~ishm/nasa_logo.ico">
</head>

<body>
<p>Logging Out...</p>
</body>
</html>
