<?php

class Movie
{
  // подключение к базе данных и таблице "movies"
  private $conn;
  private $table_name = "movies";

  // свойства объекта
  public $id;
  public $name;
  public $category_name;
  public $text;
  public $created_at;

  // конструктор для соединения с базой данных
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // метод для получения цитат из фильмов и сериалов
  function read()
  {
    // выбираем все записи
    $query = "SELECT q.id, m.name, m.created_at, c.name AS category_name, q.text
          FROM " . $this->table_name . " m
          LEFT JOIN movie_category mc ON m.id = mc.movie_id
          LEFT JOIN categories c ON mc.category_id = c.id
          INNER JOIN quotations q ON m.id = q.movie_id
          ORDER BY q.created_at DESC";

    // подготовка запроса
    $stmt = $this->conn->prepare($query);

    // выполняем запрос
    $stmt->execute();
    return $stmt;
  }

  // метод для получения цитат из рандомного фильма или сериала
  function readRandomMovie()
  {
    $query = "SELECT q.id, m.name, m.created_at, c.name AS category_name, q.text
          FROM " . $this->table_name . " m
          LEFT JOIN movie_category mc ON m.id = mc.movie_id
          LEFT JOIN categories c ON mc.category_id = c.id
          INNER JOIN quotations q ON m.id = q.movie_id
          ORDER BY RAND()
          LIMIT 1";


    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    // получаем извлеченную строку
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // установим значения свойств объекта
    $this->id = $row["id"];
    $this->name = $row["name"];
    $this->category_name = $row["category_name"];
    $this->text = $row["text"];
    $this->created_at = $row["created_at"];
  }
}
