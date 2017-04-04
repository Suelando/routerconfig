<?php
require_once "database.php";
class ShowRoutesDb extends Database {
   public function showRoutes($formUser, $formPassword){//Função que exibe as rotas.
    $sql = "  select ip_network,ip_mask,ip_next_jump from config_routers".
    $this->connection->exec($sql);
  }
}