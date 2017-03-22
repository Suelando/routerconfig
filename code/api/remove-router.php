<?php
  require 'util.php';
  $address = "192.168.16.0";//$_GET['address'] ?? null;
  $mask = "255.255.255.0";//$_GET['mask'] ?? null;
  $gateway = "10.0.2.2";//$_GET['gateway'] ?? null;
  $interface = "enp0s3";//$_GET['interface'] ?? null;

  $command = "sudo route del -net $address netmask $mask gw $gateway";
  $routeRemoveCommand = sshCommand($command);
  $response = [];
  //$errorStream = '';

  if (empty($routeRemoveCommand['errorStream'])){
    $response = ['ok' => 'Rota removed'];
  } else {
    $response = ['ok' => 'Erro ao remover'];
  }
  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($response);
?>
