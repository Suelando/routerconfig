<?php
require_once "database.php";
session_start();
class ConfigRoutesDb extends Database {
  public function addRoute($ipRede, $ip, $ipMask, $ipGateway, $){//Função que adiciona uma rota.
    $sql = " insert into config_routers(ip_network,ip_mask,ip_next_jump,id_user)".
            " values ('{$ipRede}', '{$ipMask}', {$ipGateway}, {$_SESSION['user_id']});";//O usuário irá pegar o que está logado.
    $this->connection->exec($sql);
  }
  public function delRoute($id){//Função que deleta uma rota.
    $sql = "  delete from config_routers".
            " where id_config_router = {$id}";
    $this->connection->exec($sql);
  }
}
