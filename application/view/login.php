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
	<div class="center">
    <div class="formCenter">
      <h2>Login</h2>
          <div class="grid form loginForm">
            <div class="messageBox">
              <sapn class="errMessage"style="color : red;"><?php echo isset($this->errMsg) ? $this->errMsg : "" ?></sapn>
            </div>
            <form action="/user/login" method="post" class="grid">
              <input type="text" name="user_id" id="user_id" placeholder="ID" class="inputTag">
              <input type="password" name="user_pw" id="user_pw" placeholder="PASSWORD" class="inputTag" >
              <button type="submit" class="btn btn-secondary btnGroup">Login</button>
            </form>
            <form action="/user/regist" method="get" class="grid">
                <p class="formText">Not registered? </p>
                <button type="submit" class="btn btn-secondary btnGroup">Create an account</button>
            </form>
          </div>
    </div>
  </div>
      <?php require_once("application/view/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/application/view/JavaScript/index.js"></script>
</body>
</html>