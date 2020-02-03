<?php
  session_start();
  global $pdo;
  
  try {
    $pdo = new PDO("mysql:dbname=classificados_inicio;host=localhost", "root", "");
  } catch(PDOException $e) {
    echo "FALHOU: ".$e->getMessage();
    exit;
  }
?>