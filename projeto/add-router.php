<?php
  require 'util.php';
  $address = $_GET['address'] ?? null;
  $mask = $_GET['mask'] ?? null;
  $gateway = $_GET['gateway'] ?? null;
  $interface = $_GET['interface'] ?? null;
  $command = "sudo route add -net $address netmask $mask gw $gateway";
  $routeAddOut = sshCommand($command);
  $response = [];
  // var_dump($routeAddOut);
  if(empty($routeAddOut['errorStream'])){
    $response = ['ok' => 'Rota add'];
  } else {
    $response = ['error' => 'Erro ao adicionar rota'];
  }
  echo json_encode($response);
