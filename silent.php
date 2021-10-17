<?php
  include('dog.function.php');
  $pdo = connect_to_db();

  $sql = 'SELECT * FROM topic_table';
  $stmt = $pdo->prepare($sql);
  $status = $stmt->execute();
  if($status) {
    $data = $stmt->fetch();
    var_dump($data);
  }
  // var_dump($stmt);
  // exit
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
  </head>
  <body>
    <h1>無言が続く場合は</h1>
    
  </body>
</html>