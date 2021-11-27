<?php
	session_start();
	header("Cache-control: private"); // IE6 fix
/******************************************************************************/
/******************** INCLUDE FILES *******************************************/
/******************************************************************************/

// accounts2.inc contains functionsassociated with user accounts
require_once "includes/accounts2.inc";

head();
hads_users_connect();

	if (( ! isset($_SESSION['username']) ) ||
	       (( isset($_POST['username']) ) && ( isset($_POST['password']) )))
	{
		$query = "SELECT username FROM userinfo WHERE username = \"".
           $_POST['username']."\" AND password = \"".
		   md5($_POST['password'])."\"";
		$result = mysql_db_query("HADS_Users", $query);
		$num_rows = mysql_num_rows($result);
		if ( ($num_rows > 0) && ($num_rows < 2) )
		{

        	$query = "SELECT seclevel FROM userinfo WHERE username = \"".
            	$_POST['username']. "\"";
        	$result = mysql_db_query("HADS_Users", $query);
        	$seclevel = mysql_fetch_array($result);
        	$access = $seclevel['seclevel'];

			$_SESSION['username'] = $_POST['username'];
			$_SESSION['seclevel'] = $access;
			
		}
		else
		{
			unset($_SESSION['username']);
			unset($_SESSION['seclevel']);
			session_destroy();
			echo "Authentication Failed. Please try again.";
			login();
		}
	}

	if (isset($_SESSION['username']))
	{
        switch ($_SESSION['seclevel'])
        {
            case 8388607:
                echo "<center><h3>Authenticated.  Welcome ".
                   $_SESSION['username'].". You are the man</h3></center>\n"; 
                echo "<br> <br> \n";
				echo administrator();
				break;
			case 1:
				echo "<center><h3>Authenticated As Guest User.  Welcome "
					.$_SESSION['username'].".</h3></center>\n";
				echo guest();
				break;
			case 27:
				echo "<center><h3>Authenticated As Standard User.  Welcome "
					.$_SESSION['username'].".</h3></center>\n";
				echo standard();
				break;
			case 5499:
				echo "<center><h3>Authenticated As Power User.  Welcome "
					.$_SESSION['username'].".</h3></center>\n";
				echo power();
				break;
			case 40959:
				echo "<center><h3>Authenticated As Secure Power User.  ";
				echo "Welcome ".$_SESSION['username'].".</h3></center>\n";
				echo secure();
				break;
			case 1572864:
				echo "<center><h3>Authenticated As Maintenance User.  ";
				echo "Welcome ".$_SESSION['username'].".</h3></center>\n";
				echo maintenance();
				break;
		  	default:
          		echo "You're an arbitrary GUEST User ";
				echo $_SESSION['username'];
				echo ". You can't do anything because you're everyone's slave";
               break;
		}
	}
		
	echo tail();
?>
