<?php
  try {
    $pdo = new PDO(
      'mysql:host=localhost;dbname=db_map',
      'root',
      '',
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
  } catch (PDOException $e) {
    echo "Нет соединение с базой данных" . $e->getMessage();
  }
?>