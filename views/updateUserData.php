<?php
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
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
  </head>

  <body>
    <div class="container my-5">
      <form action='../user/updateProcess.php' method='post'>
        <input type='hidden' name='id' value='<?= $id; ?>' autocomplete='off'>
        <div class="form-group">
          <label>이름</label>
          <input type="text" class="form-control" placeholder="이름을 입력하세요." autocomplete="off" name="name"
            value='<?= $name; ?>'>
        </div>
        <div class="form-group">
          <label>이메일</label>
          <input type="email" class="form-control" placeholder="이메일을 입력하세요." autocomplete="off" name="email"
            value='<?= $email; ?>'>
        </div>
        <div class="form-group">
          <label>폰 번호</label>
          <input type="text" class="form-control" placeholder="폰 번호를 입력하세요." autocomplete="off" name="mobile"
            value='<?= $mobile; ?>'>
        </div>
        <div class="form-group">
          <label>비밀번호</label>
          <input type="password" class="form-control" placeholder="비밀번호를 입력하세요." autocomplete="off" name="password"
            value='<?= $password; ?>'>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">업데이트</button>
      </form>
    </div>
  </body>

</html>