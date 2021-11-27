<?php
//Project Name:  Integrated System Health Management Website
//School Name:  Rowan University
//Department:  Computer Science & Electrical / Computer Engineering Department
//Computer Science Faculty Advisor:  Dr. Adrian Rusu
//Computer Science Teams Project Leader:  Confessor Santiago
//Programmers:  Ali Daneshmand
//				Peter Flanner
//
//Project Description:
//	The goal of this web-based database system is to provide the user with a
//secure hierarchical environment that controls access to sensitive data related to the ISHM endeavor.
//
//Purpose Of This Page:  This page is simply a Welcome page that will allow a
//user to read generic background information on this project, on the team
//working on the project, as well as login (that is if they own a valid user
//account).

//	The file included below is a PHP file that contains some general functions
//that are generic to all the web pages that are included in this web-package
	require_once "includes/standard.inc";

//The "head()" function is one of the functions from the "includes/standard.inc"
//file.  It contains the standard HEADER information to make the generated HTML
// a valid HTML.
	echo head();
?>
	<table border="0" width="100%">
		<tr>
			<td align=center valign=top>
	<?php echo title();?>
			</td>
			<td>
<?php
	//Below is a switch statement that manipulated the "$var" variable"
	//The "$var" variable is linked to the links of the webpage such that
	//when the link is clicked, this page (index.php) reloads with the
	//information requested from "$var".  For example, if the "About Us"
	//link is clicked, "$var" gets assigned to "aboutus".  And so, "index.php"
	//reloads, runs through this switch statement, finds the "aboutus" case and
	//loads the information for the "About Us" link.
			 switch($_GET['var'])
				{
					case 'background':
						echo define_ISHM();
						//This function is defined in the "standard.inc"
						//page.  It simple prints out to the screen that
						//provides background information on the whole
						//ISHM endeavor.
						break;
					case "aboutus":
						echo aboutus();
						//This function is also defined in the "standard.inc"
						//page.  It too simply prints out a set of text.  But
						//this text provides background information on the Rowan
						//people involved in this project.
						break;
					default:
			//This default case is designed for when the "$var" variable
			//is not assigned to any particular value, like when the
			//page is first loaded.  It provides a welcome text as well
			//as a login form to the database information.
?>
			<center>
			<h4>WELCOME TO THE HEALTH ASSESSMENT DATABASE SYSTEM</h4>
			</center>
			<br>
			Please notice the navigation links on the left of the page.  More
			features should be added soon. For more information, please either
			go to the <a href="index.php?d=aboutus">About Us</a>
			link on the left of the page, or e-mail us. E-Mail
			<a href="mailto:ali.daneshmand@gmail.com">Ali Daneshmand HERE</a>.

<?php 					break;
				} // endswitch
?>
			</td>
			<td align=right valign=top>
			<br>
			<?php echo login();?>
			* <i>Forgot your password?.  <a href="forgot.html">Click Here</a></i>
			</td>
		</tr>
	</table>

<?php

//The "tail()" function is another function from the "includes/standard.inc".
//It simply provides the HTML Code in a valid HTML format.
	echo tail();
?>

