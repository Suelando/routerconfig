<?php
require_once "database.php";
class ConfigRoutesDb extends Database {
  public function addRoute($ipRede, $ip, $ipMask, $ipGateway, $){//Função que adiciona uma rota.
    $sql = " insert into config_routers(ip_network,ip_mask,ip_next_jump,id_user)".
            " values ('{$ipRede}', '{$ipMask}', {$ipGateway}, {$});";//O usuário irá pegar o que está logado.
    $this->connection->exec($sql);
  }
  public function delRoute($id){//Função que deleta uma rota.
    $sql = "  delete from config_routers".
            " where id_config_router = {$id}";
    $this->connection->exec($sql);
  }
  public function createUser($formUser, $formPassword){//Função que criar o usuário.
    $sql = "  insert into users_routers(status_user,name_user,password)".
            " values(1,'{$formUser}','{$formPassword}');";
    $this->connection->exec($sql);
  }
   public function showRoutes($formUser, $formPassword){//Função que exibe as rotas.
    $sql = "  select ip_network,ip_mask,ip_next_jump from config_routers".
    $this->connection->exec($sql);
  }
}