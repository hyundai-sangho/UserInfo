<?php

// mariaDB 연동
require_once '../db/connect.php';

?>

<!DOCTYPE html>
<html lang="ko">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <body>
    <div class="container">
      <button class="btn btn-primary my-5" onclick="location.href='user.php'" style="text-decoration: none;">사용자
        추가</button>
      <table class="table" aria-describedby="userData">
        <thead>
          <tr>
            <th scope="col">번호</th>
            <th scope="col">이름</th>
            <th scope="col">이메일</th>
            <th scope="col">폰 번호</th>
            <th scope="col">비밀번호</th>
            <th scope="col">운영</th>
          </tr>
        </thead>
        <tbody>

          <?php
        // 유저 정보 가져오기;
        require_once '../user/getUserData.php';
        ?>

        </tbody>
      </table>
    </div>
  </body>

</html>