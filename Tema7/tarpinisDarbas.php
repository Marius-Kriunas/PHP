<?php

session_start();

?>
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


 if(!isset($_SESSION['do_you_login']) || !$_SESSION['do_you_login'] === true) {

  header('Location: http://localhost/PHP/tema7/failas2.php');
   exit;

}

$edit_text = '';


if(isset($_POST['file-name'])) {

  $file = $_POST['file-name'];

} elseif(isset($_GET['file-name'])) {
    $file = $_GET['file-name'];
  } 
  else $file = ' ';

if(!empty($_POST)) {

$edit_text=$_POST['editor'];

if(isset($_POST['newFile'])) {
  file_put_contents($_POST['fileName'], $edit_text);

}
}

if(isset($_POST['create-file']) && $_POST['new-file-name'] != '') {
  fopen($_POST['new-file-name']. '.txt', "w");
  $file = $_POST['new-file-name'] . '.txt';
}

if(isset($_POST['save'])) {
  $edit_text = $_POST['editor'];
  file_put_contents($file, $edit_text);

}

if($file) {
  @$edit_text = file_get_contents($file);
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

<form action="tarpinisDarbas.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
<br>
<input type = "submit" name="create-file" file-name="<?php $_GET['file-name']?>" value="New File">
<input type="text" name="new-file-name" file-name="<?php $_GET['file-name']?>">
<br>
<textarea name="editor" value="" id="" style="width:600px; height:300px;"><?php echo $edit_text ?></textarea>
<br>
<input type="submit" name="save" value="Save">
<input type="hidden" name="file-name" value="<?=$file ?>">
</form>

</body>

</html>
