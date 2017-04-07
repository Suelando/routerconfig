<?php
  require 'util.php';
  $command = "sudo service networking restart";
  $routeAddOut = sshCommand($command);
  $response = [];
  // var_dump($routeAddOut);
  if(empty($routeAddOut[' '])){
    $response = ['ok' => 'Started'];
  } else {
    $response = ['error' => 'Not Started'];
  }
  echo json_encode($response);
