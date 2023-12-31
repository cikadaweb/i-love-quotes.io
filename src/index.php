<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>i-love-quotes</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header class="header">
    <div class="container d-flex-center">
      <img class="header__logo" src="./img/logo.png" alt="i-love-quotes logo">
      <h1 class="header__title">API сервис <br> I-love-quotes.io</h1>
      <div class="header__subtitle">
        i-love-quotes.io is это бесплатный JSON API для взаимодействия с цитатами из ваших любимых фильмов и сериалов.
        Подробнее
      </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <div class="main__title">Использование</div>

      <div class="code">
        <div class="code__title">Получение цитаты из случайного фильма или сериала.</div>
        <code class="code__content">
          <span>GET </span>
          <a class="link" target="_blank" href="./api/movie/random.php">http://localhost/api/movie/random.php</a>
        </code>

        <div class="code__title">Пример ответа:</div>
        <pre>
          <code class="code__content">
            {<br>
              "id": 5,<br>
              "name": "Интерстеллар",<br>
              "category_name": "film",<br>
              "text": "Нам всегда было свойственно преодолевать невозможное... Мы вспоминаем эти моменты. Моменты, когда мы осмеливаемся стремиться к невыполнимому, сокрушать барьеры, дотягиваться до звёзд, объяснить необъяснимое. Мы гордимся этими достижениями. Но мы всё растеряли. Может, мы просто забыли, что значит быть первооткрывателями, что мы лишь в начале пути, что наши величайшие свершения ещё впереди, что наша судьба — стремиться ввысь.",<br>
              "created_at": "2023-06-13 21:44:45"<br>
            }
          </code>
        </pre>
      </div>

      <div class="code">
        <div class="code__title">Получение всех фильмов и сериалов.</div>
        <code class="code__content">
          <span>GET </span>
          <a class="link" target="_blank" href="./api/movie/read.php">http://localhost/api/movie/read.php</a>
        </code>
      </div>

    </div>
  </main>
  <footer class="footer">
    <div class="container d-flex-center">
      <div class="footer__title">
        (c) Все права защищены
      </div>
    </div>
  </footer>
</body>

</html>