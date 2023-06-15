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
        Все права защищены
      </div>
    </div>
  </footer>
</body>

</html>