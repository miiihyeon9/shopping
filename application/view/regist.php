<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/application/view/css/index.css">
</head>
<body>
    <header>
            <!-- 로고 -->
            <div class="loginLogo">
              <a href="/shop/main"><img src="https://see.fontimg.com/api/renderfont4/W9lv/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/U0hPUA/quartzo-bold.png"  ></a>
            </div>
    </header>
    <h3 style="color : red;"><?php echo isset($this->errMsg) ? $this->errMsg : "" ?></h3>
    <div class="login-page">
        <div class="loginForm">
            <form action="/user/regist" method="post">
            <label for="id">ID</label>
            <input type="text" placeholder="ID" name="id" id="id" required>
            <label for="id">PASSWORD</label>
            <input type="password" placeholder="PASSWORD" name="pw" id="pw" required>
            <label for="id">PASSWORD CHECK</label>
            <input type="password" placeholder="PASSWORD CHECK" name="pwCheck" id="pwCheck" required>
            <button type="submit" class="btn btn-secondary">Sign up</button>
            </form>
        </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

