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
  <?php require_once("application/view/header.php"); ?>
    
    <div class="login-page">
      <div class="loginForm">
          <h3 style="color : red;"><?php echo isset($this->errMsg) ? $this->errMsg : "" ?></h3>
        <form action="/user/login" method="post" class="login-form">
            <input type="text" name="user_id" id="user_id" placeholder="ID">
            <input type="password" name="user_pw" id="user_pw" placeholder="PASSWORD">
            <button type="submit" class="btn btn-secondary">Login</button>
          </form>
          <form action="/user/regist" method="get">
          <p class="message">Not registered? <button type="submit" class="btn btn-secondary">Create an account</button></p>
          </form>
          <form action="/user/findPassword" method="get">
          <button type="submit" class="btn btn-secondary">Find Password</button>
          </form>
      </div>
    </div>
      <!-- <script src="../Javascript/login.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>