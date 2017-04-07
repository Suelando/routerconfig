<?php
require_once "database.php";
$database = include('configdb.php');
class UsersRoutersDb extends Database {
  public function accessUser($login, $password){//Função que autentica o usuário.
    $sql = " select name_user,password from users_routers".
            "where name_user = {$login} and password = {$password};";
    print_r($this->connection->exec($sql));
  }
}
$u = new UsersRoutersDb();
$u->accessUser()
