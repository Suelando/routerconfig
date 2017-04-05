<?php
  require 'util.php';

  $address = $_GET['addressValue'] ?? null;
  $mask = $_GET['maskValue'] ?? null;
  $gateway = $_GET['gwValue'] ?? null;

  $command = "sudo route add -net $addressValue netmask $maskValue gw $gwValue";

  $routeAddOut = sshCommand($command);

  $response = [];

  if(empty($routeAddOut['errorStream'])){
    $response = ['ok' => 'Rota add'];
  } else {
    $response = ['error' => 'Erro ao adicionar rota'];
  }

  echo json_encode($response);
