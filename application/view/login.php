<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/application/view/css/index.css">
</head>
<body>
  <div class="wrap">
  <?php require_once("application/view/header.php"); ?>
	<div class="container">
    <h2>Login</h2>
    <div class="center ">
      <div class="loginPage">
          <div class="loginFormBox">
            <h3 style="color : red;"><?php echo isset($this->errMsg) ? $this->errMsg : "" ?></h3>
            <form action="/user/login" method="post" class="loginForm">
              <input type="text" name="user_id" id="user_id" placeholder="ID" class="loginPad">
              <input type="password" name="user_pw" id="user_pw" placeholder="PASSWORD" class="loginPad" >
              <span type="button" class="showPw"></span>
              <button type="submit" class="btn btn-secondary btnHeight">Login</button>
            </form>
            <form action="/user/regist" method="get" class="createId loginForm">
                <p class="registerText">Not registered? </p>
                <button type="submit" class="btn btn-secondary btnHeight">Create an account</button>
            </form>
            <!-- <form action="/user/findPassword" method="get" class="createId">
              <p class="registerText">Not registered? </p>
              <button type="submit" class="btn btn-secondary btnHeight">Find Password</button>
            </form> -->
          </div>
        </div>
    </div>
    </div>
      
      
    </div>
      <?php require_once("application/view/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/application/view/JavaScript/index.js"></script>
</body>
</html>