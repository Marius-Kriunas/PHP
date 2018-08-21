<?php

$target_dir = "upload_file/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


preg_match('/\.txt$/', $entry);

if ($entry!= '.' && $entry!='..' && !preg_match('/\.txt$/', $entry)) {
    echo $entry;
}



?>
