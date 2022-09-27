<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $stmt = $connection->prepare("INSERT INTO crud (name, email, mobile, password) VALUES(?,?,?,?)");
  $stmt->bind_param("ssss", $name, $email, $mobile, $password);
  $result = $stmt->execute();

  // $sql = "INSERT INTO crud (name, email, mobile, password) VALUES('$name', '$email', '$mobile','$password')";
  // $result = mysqli_query($connection, $sql);

  if ($result) {
    header('location:display.php');
  } else {
    die(mysqli_error($connection));
  }
}