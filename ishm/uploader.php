<html>
<body>
<?php
$target_path = "tmp/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

echo "<br />";

if(chmod($target_path, 0777)) {
	echo "chmod successful";
}else{
	echo "chmod failed";
}
?>
</body>
</html>
