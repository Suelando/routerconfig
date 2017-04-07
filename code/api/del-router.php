<?php
  require 'util.php'
  $address = $_GET['ipRede'] ?? null;
  $mask = $_GET['ipMask'] ?? null;
  $gateway = $_GET['ipGateway'] ?? null;
  $interface = $_GET['interface'] ?? null;
  $command = "sudo route del -net $ipRede mask $ipMask gw $ipGateway";
  $routeRemoveCommand = sshCommand($command);
  $response = [];
  if (empty($routeRemoveCommand[errorStream])){
    $response = ['ok' => 'Rota removed'];
  } else {
    $response = ['ok' => 'Erro ao remover'];
  }
  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($response);
?>
