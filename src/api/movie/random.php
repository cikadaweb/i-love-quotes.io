<?php

// необходимые HTTP-заголовки
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");

// подключение базы данных и файл, содержащий объекты
include_once "../config/database.php";
include_once "../objects/movie.php";

// получаем соединение с базой данных
$database = new Database();
$db = $database->getConnection();

// инициализируем объект
$movie = new Movie($db);

// получим детали цитаты
$movie->readRandomMovie();

if ($movie->name != null) {

  // создание массива
  $movie_arr = array(
    "id" => $movie->id,
    "name" => $movie->name,
    "category_name" => $movie->category_name,
    "text" => $movie->text,
    "created_at" => $movie->created_at,
  );

  // код ответа - 200 OK
  http_response_code(200);

  // вывод в формате json
  echo json_encode($movie_arr);
} else {
  // код ответа - 404 Не найдено
  http_response_code(404);

  // сообщим пользователю, что такая цитата не существует
  echo json_encode(array("message" => "Цитата не существует"), JSON_UNESCAPED_UNICODE);
}
