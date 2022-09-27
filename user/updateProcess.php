<?php

require_once '../db/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$stmt = $connection->prepare("UPDATE `crud` SET name=?, email=?, mobile=?, password=? WHERE id=?");
$stmt->bind_param("sssss", $name, $email, $mobile, $password, $id);
$result = $stmt->execute();

// $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";
// $result = mysqli_query($connection, $sql);

if ($result) {
  echo '삭제 성공';
  header('location:../views/display.php');
} else {
  echo '에러';
}