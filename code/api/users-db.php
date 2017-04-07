<?php
require_once "database.php";
class CreateUsersDb extends Database {
   public function createUser($formUser, $formPassword){//Função que criar o usuário.
    $sql = "  insert into users_routers(status_user,name_user,password)".
            " values(1,'{$formUser}','{$formPassword}');";
    $this->connection->exec($sql);
  }
}