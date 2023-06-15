<?php

class Database
{
  // учетные данные базы данных
  private $host = "mysql";
  private $db_name = "ilovequotes";
  private $username = "root";
  private $password = "root";
  public $conn;

  // получение соединение с БД
  public function getConnection()
  {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      $this->conn->exec("set names utf8");
    } catch (PDOException $exception) {
      echo "Ошибка подключения: " . $exception->getMessage();
    }

    return $this->conn;
  }
}
