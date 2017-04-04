<?php
  require 'util.php';
  $login = $_GET['login'] ?? null;
  $password = $_GET['password'] ?? null;
  $command = "sudo select name_user,password from users_routers".
			"where name_user = {$login} and password =  {$password};";
  $routeAddOut = sshCommand($command);
  $response = [];
  // var_dump($routeAddOut);
  if(empty($routeAddOut['errorStream'])){
    $response = ['ok' => 'UserExist'];
  } else {
    $response = ['error' => 'UserDontExiste'];
  }
  echo json_encode($response);
