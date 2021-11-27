<?php
	include('jpgraph-1.19/src/jpgraph.php');
	include('standard.inc');
	include('functions.inc');
	include('connect.inc'); 

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

$query_file = "query.txt";
$fh = fopen($query_file, 'r') or die("can't upen file");
$row = "---------------------------------------------------------------------".
"----------------------------------------------------------------------------";
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
	while ( $output = mysql_fetch_array($result) )
	{
		echo "<tr>\n";
		echo "<td align='center' valign='middle' width=\"10%\">\n";
		fwrite($fh, $row);
		echo $output['had_uuid']; 
		fwrite($fh, $output['had_uuid'];
		fwrite($fh, $row);
		echo "</td>\n";
		echo "<td align='center' valign='middle' width=\"10%\">\n";
		fwrite($fh, $row);
		echo $output['Test_Designation']; 
		fwrite($fh, $output['Test_Designation'];
        fwrite($fh, $row);
		echo "</td>\n";
		echo "<td align='center' valign='middle' width=\"10%\">\n";
		fwrite($fh, $row);
		echo $output['Component_Name']; 
		fwrite($fh, $output['Component_Name'];
        fwrite($fh, $row);
		echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";
        fwrite($fh, $row);
        echo $output['Channel_ID'];
        fwrite($fh, $output['Channel_ID'];
        fwrite($fh, $row);
        echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";
        fwrite($fh, $row);
        echo $output['Description'];
        fwrite($fh, $output['Channel_ID'];
        fwrite($fh, $row);
        echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";
        fwrite($fh, $row);
        echo $output['Data_File_Name'];
        fwrite($fh, $output['Channel_ID'];
        fwrite($fh, $row);
        echo "</td>\n";
        echo "<td align='center' valign='middle' width=\"10%\">\n";
        fwrite($fh, $row);
        echo $output['Data_Series'];
        fwrite($fh, $output['Channel_ID'];
        fwrite($fh, $row);
        echo "</td>\n";
		echo "<td></td>\n";
		echo "</tr>\n"; 
	}
fclose($fh); 
?>
</table>
</center> 
<?php
echo "<br><br>\n";
userdefined_nonsecure_query();
echo "<br><br>\n"; 
date_time(); 
tail();
