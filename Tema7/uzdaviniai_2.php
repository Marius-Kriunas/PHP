<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Darbas</title>
</head>
<body>
    
<?php

$edit_text = '';
$file = 'failas.txt';


if(isset($_GET['file-name'])) {
  $file = $_GET['file-name'];
  print_r($_GET);

} if($file) {
  $edit_text = file_get_contents($file);
}

if(!empty($_POST)) {

// $edit_text=$_POST['editor'];

if(isset($_POST['newFile'])) {
  file_put_contents($_POST['fileName'], $edit_text);

}

if(isset($_POST['save'])) {
  file_put_contents($_POST['editor'], $edit_text);

}

}


if ($handle = opendir('.')) {
  while (false !== ($entry = readdir($handle))) {
         if(preg_match('/\.(txt|jpg)$/', $entry)){
             echo '<a href="?file-name='.$entry.'&ext='.'">'.$entry.'</a><br>';
         }
  }
  closedir($handle);
}



?>

<form action="uzdaviniai_2.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
<br>
<input type = "submit" name="newFile">
<input type="text" name="fileName">
<br>
<textarea name="editor" value="" id="" style="width:600px; height:300px;"><?php echo $edit_text ?></textarea>
<br>
<input type="submit" name="save" value="Save">
</form>

</body>

</html>
