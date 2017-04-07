<?php
session_start();
$login = $_POST['formUser'] ?? null;
$password = $_POST['formPassword'] ?? null;
$user_id = check_user($login, $password)
if($user_id != null){
  $_SESSION['auth'] = true;
  $_SESSION['user_id'] = $user_id;
  header('Location: home.php');
} else {
  header('Location: index.html');
}
