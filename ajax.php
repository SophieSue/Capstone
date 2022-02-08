<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:error.php');
    exit;
} else {



$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  echo "false";
  return;
}
 
if (!file_exists('users')) {
  mkdir('users', 0777);
}


move_uploaded_file($_FILES['file']['tmp_name'], 'users/'  . $_SESSION['user_name'] . '.jpg'); //after users/ is whatever like to name the file

$name =  'users/'  . $_SESSION['user_name'] . '.jpg';

$_SESSION['photo'] = $name;
echo 'refresh';
}
?>