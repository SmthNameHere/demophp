<?php
  $title = trim(filter_var($_POST['title'],FILTER_SANITIZE_STRING));
  $intro = trim(filter_var($_POST['intro'],FILTER_SANITIZE_STRING));
  $text = trim(filter_var($_POST['text']);

  $error = '';
  if(strlen($title) <= 3)
    $error = 'Введите название статьи';
  else if(strlen($intro) <= 15)
    $error = 'Введите интро (>15 символов)';
  else if(strlen($text) <= 20)
    $error = 'Введите текст статьи(>20 символов)';

  if($error != '') {
    echo $error;
    exit();
  }


  require_once '../mysql_connect.php';

  $sql = 'INSERT INTO articles(title, intro, text, date, author) VALUES(?, ?, ?, ?, ?)';
  $query = $pdo->prepare($sql);
  $query->execute([$title, $intro, $text, time(), $_COOKIE['log']]);

  echo 'Готово';
?>
