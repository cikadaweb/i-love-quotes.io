<?php

// необходимые HTTP-заголовки
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// подключение базы данных и файл, содержащий объекты
include_once "../config/database.php";
include_once "../objects/movie.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// инициализируем объект
$movie = new Movie($db);

// запрашиваем фильмы
$stmt = $movie->read();
$num = $stmt->rowCount();

// проверка, найдено ли больше 0 записей
if ($num > 0) {
  // массив фильмов
  $movies_arr = array();
  $movies_arr["movies"] = array();

  // получаем содержимое нашей таблицы
  // fetch() быстрее, чем fetchAll()
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // извлекаем строку
    extract($row);
    $movie_item = array(
      "id" => $id,
      "name" => $name,
      "category_name" => $category_name,
      "text" => $text,
      "created_at" => $created_at,
    );
    array_push($movies_arr["movies"], $movie_item);
  }

  // устанавливаем код ответа - 200 OK
  http_response_code(200);

  // выводим данные о цитате в формате JSON
  echo json_encode($movies_arr);
} else {
  // установим код ответа - 404 Не найдено
  http_response_code(404);

  // сообщаем пользователю, что цитаты не найдены
  echo json_encode(array("message" => "Цитаты не найдены."), JSON_UNESCAPED_UNICODE);
}
