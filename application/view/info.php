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
    <h2>My Info</h2>
        <div class="loginForm modiForm loginFormBox modiFormBox">
            <label for="user_id" class="btnMargin registerText">ID</label>
            <input type="text" id="user_id" class="registPad btnMargin" name="user_id" value="<?php echo isset($this->result[0]["user_id"]) ? $this->result[0]["user_id"] : $_POST["user_id"] ?>" disabled>
            <input type="hidden" name="user_id" value="<?php echo isset($this->result[0]["user_id"]) ? $this->result[0]["user_id"] : $_POST["user_id"] ?>" disabled>
            <label for="user_pw" class="btnMargin registerText">Password</label>
            <input type="password" id="user_pw" class="registPad btnMargin" name="user_pw" value="<?php echo isset($this->result[0]["user_pw"]) ? $this->result[0]["user_pw"] : $_POST["user_pw"] ?>" disabled>
            
            <label for="user_name" class="btnMargin registerText">NAME</label>
            <input type="text" id="user_name" class="registPad btnMargin" name="user_name" value="<?php echo isset($this->result[0]["user_name"]) ? $this->result[0]["user_name"] : $_POST["user_name"] ?>" disabled>

            <!-- <form action="/user/logout" method="get">
            <button id="logout">Logout</button>
            </form> -->
            <form action="/user/modify" method="get" class="modiBtn">
                <button  class="btn btn-secondary registPad btnMargin btnWidth">수정하기</button>
            </form>
            <form action="/user/delete" method="get" class="modiBtn">
                <button  class="btn btn-secondary registPad btnMargin btnWidth">탈퇴하기</button>
            </form>
        </div>
    </div>
        <?php require_once("application/view/footer.php") ?>
    <script src="/application/view/JavaScript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>