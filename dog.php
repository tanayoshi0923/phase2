<?php
  include('dog.function.php');
  $pdo = connect_to_db();

  echo 'hello world'
?>


<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
    </head>
  <body>
    <p>会話に困ったとき</p>
    <p2><a href="silent.php" class="btn">無言が続く場合</a><p2>
    <p3><a href="feelbad.php" class="btn">相手の話を遮る場合</a><p3>
</body>
</html>
​