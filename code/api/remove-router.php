<?php
  require 'util.php';
  $address = $_GET['address'] ?? null;
  $mask = $_GET['mask'] ?? null;
  $gateway = $_GET['gateway'] ?? null;

  $command = "sudo route del -net $address netmask $mask gw $gateway";
  $routeRemoveCommand = sshCommand($command);
  $response = [];
  

  if (empty($routeRemoveCommand['errorStream'])){
    $response = ['ok' => 'Rota removed'];
  } else {
    $response = ['ok' => 'Erro ao remover'];
  }
  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($response);
?>
