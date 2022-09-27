<?php

// $sql = "SELECT * FROM crud";
// $result = mysqli_query($connection, $sql);

$stmt = $connection->prepare("SELECT * FROM crud");
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    echo "<tr>
            <th scope='row'>$id</th>
            <td>$name</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$password</td>
            <td>
            <form action='../views/updateUserData.php' method='post' style='display:inline'>
            <input type='hidden' name='id' value='$id'>
            <input type='hidden' name='name' value='$name'>
            <input type='hidden' name='email' value='$email'>
            <input type='hidden' name='mobile' value='$mobile'>
            <input type='hidden' name='password' value='$password'>
            <button class='btn btn-primary'>업데이트</button>
            </form>
            <form action='../user/deleteUserData.php' method='post' style='display:inline'>
            <input type='hidden' name='id' value='$id'>
            <button class='btn btn-danger'>삭제</button>
            </form>
            </td>
            </tr>";
  }
}