<?php
  require 'util.php';

  $address = "192.168.16.0";//$_GET['address'] ?? null;
  $mask = "255.255.255.0";//$_GET['mask'] ?? null;
  $gateway = "10.0.2.2";//$_GET['gateway'] ?? null;
  $interface = "enp0s3";//$_GET['interface'] ?? null;

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
