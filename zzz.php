<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid ">
            <!-- 로고 -->
            <a class="navbar-brand mx-auto shop_name" href="index2.html"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U0hPUA/quartzo-bold.png" alt="Bold fonts"></a>
            <!-- <a href="https://www.fontspace.com/category/bold"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U0hPUA/quartzo-bold.png" alt="Bold fonts"></a> -->
            <!-- 화면 줄였을 때 나타나는 메뉴 버튼  -->
        </div>
    </nav>
    </header>
    <h3 style="color : red;"><?php echo isset($this->errMsg) ? $this->errMsg : "" ?></h3>

    <div class="login-page">
        <div class="form">
        <form action="/user/login" method="post" class="login-form">
            <input type="text" name="id" id="id" placeholder="ID" required>
            <input type="password" name="pw" id="pw" placeholder="PASSWORD" required>
            <button type="submit" class="btn btn-secondary">Login</button>
            <p class="message">Not registered? <a href="#" class="messageLink">Create an account</a></p>
          </form>
        </div>
      </div>
      <!-- <script src="../Javascript/login.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>