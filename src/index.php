<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>i-love-quotes</title>
  <style>
    body {
      font-family: "Arial", sans-serif;
      font-size: larger;
    }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
  </style>
</head>

<body>
  <img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
  <?php
  $connection = new PDO('mysql:host=mysql;dbname=ilovequotes;charset=utf8', 'root', 'root');
  $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'ilovequotes'");
  $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

  if (empty($tables)) {
    echo '<p class="center">There are no tables in database <code>ilovequotes</code>.</p>';
  } else {
    echo '<p class="center">Database <code>ilovequotes</code> contains the following tables:</p>';
    echo '<ul class="center">';
    foreach ($tables as $table) {
      echo "<li>{$table}</li>";
    }
    echo '</ul>';
  }
  ?>
</body>

</html>