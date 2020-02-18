<?php
  require_once('db_connection.php');
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  $comment = $_POST['comment'];
  $crdate = date('o-m-d h:m:s',time());
  $query = "INSERT INTO coordinates VALUES (NULL, :lat, :lng, :comment, :created_date)";
  $coor = $pdo->prepare($query);
  try {
    $coor->execute(['lat' => $lat, 'lng' => $lng, 'comment' => $comment, 'created_date' => $crdate, ]);
  } catch (PDOException $e) {
    echo "нет соединение с базой данных" . $e->getMessage();
  }
  echo "HELLO";
  header('Location:main.php');
  exit();
 ?>