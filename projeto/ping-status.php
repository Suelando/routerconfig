<?php
  require 'util.php';
  $address = $_GET['address'] ?? null;
  $command = "ping $address";
  $routeAddOut = sshCommand($command);
  $response = [];
  // var_dump($routeAddOut);
  if(empty($routeAddOut['Reply'])){
    $response = ['ok' => 'Endereço Up'];
  } else {
    $response = ['error' => 'Endereço Down'];
  }
  echo json_encode($response);
