<?php

require_once '../db/connect.php';
require_once '../user/insertUserData.php';

?>

<!doctype html>
<html lang="ko">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>

  <body>
    <div class="container my-5">
      <form method="post">
        <button class="btn btn-danger mb-3" onclick="location.href='display.php'" style="text-decoration: none;">사용자
          정보</button>
        <div class="form-group">
          <label>이름</label>
          <input type="text" class="form-control" placeholder="이름을 입력하세요." autocomplete="off" name="name">
        </div>
        <div class="form-group">
          <label>이메일</label>
          <input type="email" class="form-control" placeholder="이메일을 입력하세요." autocomplete="off" name="email">
        </div>
        <div class="form-group">
          <label>폰 번호</label>
          <input type="text" class="form-control" placeholder="폰 번호를 입력하세요." autocomplete="off" name="mobile">
        </div>
        <div class="form-group">
          <label>비밀번호</label>
          <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." autocomplete="off" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">데이터 저장</button>
      </form>
    </div>

  </body>

</html>