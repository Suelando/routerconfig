<?php
$db = include('configdb.php');

class Database {
  protected $connection;
  function __construct(){
    try {
      $this->connection = new PDO("{$db['db']}:dbname={$db['dbname']};host={$db['host']}", $db['user'], $db['password']);
    } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }
}
