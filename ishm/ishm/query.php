<?php
	include('includes/standard.inc');
	include('includes/functions.inc');
	include('includes/connect.inc'); 

head();
hads_users_connect(); 
?>
<font="Courier New">
<h2><i>
Query Results: Non-Sensitive Data
</i></h2>
</font> 
<center>
<?php
$chosen_comp = $_POST['comp'];
$chosen_description = $_POST['sens'];

echo $comp."  ".$chosen_sens."  ".$chosen_files."\n";

?> 
<table bgcolor="white" border='1' width="100%">
<tr>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>HAD UUID</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>TEST DESIGNATION</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>COMPONENT NAME</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>CHANNEL ID</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>DESCRIPTION</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>DATA FILE NAME</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>DATA SERIES</u></b>
    </td>
    <td align = 'center' valign = 'middle' width="10%">
    <b><u>GRAPH IT</u></b>
	</td>
</tr>
<?php
	$query = "select had_uuid, ".
    "concat(test_data.type,tloc,'-',series,'-',year,day,'-',program) as ".
	"'Test_Designation', ".
    "concat(components.type,'-',name,'-',suffix) as 'Component_Name', ".
    "channel_id as 'Channel_ID', description as 'Description', ".
    "filename as 'Data_File_Name', data_series as 'Data_Series' ".
    "from components, sensors, data_files, hadr, test_data ".
    "where components.comp_uuid = sensors.comp_uuid and ".
    "    hadr.test_uuid = test_data.test_uuid and ".
    "    hadr.sensor_uuid = sensors.sensor_uuid and".
    "    hadr.file_uuid = data_files.file_uuid and".
    "    components.name = \"".$chosen_comp."\" and".
    "    sensors.description = \"".$chosen_description."\" ".
    "order by had_uuid";
	$result = mysql_db_query ("hads", $query);
	touch("tmp/Results_Of_Query.txt"); 
	$query_file = "tmp/Results_Of_Query.txt";
	$fh = fopen($query_file, 'w');
	$header = "HAD uuid\tTest Designation\t\tComponent Name\tChannel ID\t".
	"Description\tData File Name\t\tData Series\r\n";
	$row = "-----------------------------------------------------------------".
	"------------------------------------------------------------------\r\n";
	fwrite($fh, $header); 
	fwrite($fh, $row);
	while ( $output = mysql_fetch_array($result) )
	{
		echo "<tr>\n";
		echo "<td align='center' valign='middle' width=\"10%\">\n";

		fwrite($fh, $output['had_uuid']);
		fwrite($fh, "\t\t");

		echo $output['had_uuid']; 

		echo "</td>\n";
		echo "<td align='center' valign='middle' width=\"10%\">\n";

        fwrite($fh, $output['Test_Designation']);
		if (strlen($output['Test_Designation']) < 21)
			fwrite($fh, "\t\t");
		else
			fwrite($fh, "\t");

		echo $output['Test_Designation']; 
		echo "</td>\n";
		echo "<td align='center' valign='middle' width=\"10%\">\n";

        fwrite($fh, $output['Component_Name']);
        fwrite($fh, "\t");

		echo $output['Component_Name']; 
		echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";

        fwrite($fh, $output['Channel_ID']);
        fwrite($fh, "\t");

        echo $output['Channel_ID'];
        echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";

        fwrite($fh, $output['Description']);
        fwrite($fh, "\t\t");

        echo $output['Description'];
        echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";

        fwrite($fh, $output['Data_File_Name']);
        fwrite($fh, "\t\t");

        echo $output['Data_File_Name'];
        echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";

		fwrite($fh, "    ");
        fwrite($fh, $output['Data_Series']);
        fwrite($fh, "\r\n");
		fwrite($fh, $row);

        echo $output['Data_Series'];
        echo "</td>\n";
		echo "</tr>\n"; 
	}
	fclose($fh); 
?>
</table>
</center> 
<?php
echo "<center><a href=\"tmp/Results_Of_Query.txt\">Download Query Results";
echo "</a></center>"; 
echo "<br><br>\n";

userdefined_nonsecure_query();
echo "<br><br>\n"; 
date_time(); 
echo $_SERVER['HTTP_USER_AGENT'];
phpinfo();

tail();
