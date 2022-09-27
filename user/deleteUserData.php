<?php

require_once '../db/connect.php';
$id = $_POST['id'];

// $sql = "DELETE FROM crud WHERE id = $id";
// $result = mysqli_query($connection, $sql);

$stmt = $connection->prepare("DELETE FROM crud WHERE id = ?");
$stmt->bind_param("s", $id);
$result = $stmt->execute();

if ($result) {
  echo '삭제 성공';
  header('location:../views/display.php');
}