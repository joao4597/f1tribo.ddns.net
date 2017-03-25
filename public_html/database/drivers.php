<?php
  function getAllDrivers() {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM drivers');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllDriversByPoints() {
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM drivers ORDER BY points DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>