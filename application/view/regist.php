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
            <?php if(isset($this->errMsg)){?>
                <span><?php echo $this->errMsg ?></span>
            <?php } ?>
            <!-- <h3 style="color : red;"><?php // echo isset($this->errMsg) ? $this->errMsg : "" ?></h3> -->
            <form action="/user/regist" method="post">
            <label for="user_id">ID</label>
            <input type="text" placeholder="ID" name="user_id" id="user_id" >
            <button type = "button" class="btn btn-secondary" onclick="checkDuplication()">Check</button>
            <span id="errMsgId">
                <?php 
                if(isset($this->arrError["user_id"])){ 
                    echo $this->arrError["user_id"]; 
                }?>
            </span>
            <label for="user_pw">PASSWORD</label>
            <input type="password" placeholder="PASSWORD" name="user_pw" id="user_pw" >
            <span>
                <?php 
                if(isset($this->arrError["user_pw"])){ 
                    echo $this->arrError["user_pw"]; 
                }?>
            </span>
            <label for="pwCheck">PASSWORD CHECK</label>
            <input type="password" placeholder="PASSWORD CHECK" name="pwCheck" id="pwCheck" >
            <span>
                <?php 
                if(isset($this->arrError["pwCheck"])){ 
                    echo $this->arrError["pwCheck"]; 
                }?>
            </span>
            <label for="user_name">Name</label>
            <input type="text" placeholder="NAME" name="user_name" id="user_name" >
            <span>
                <?php 
                if(isset($this->arrError["user_name"])){ 
                    echo $this->arrError["user_name"]; 
                }?>
            </span>
            <button type="submit" class="btn btn-secondary">Sign up</button>
            </form>
        </div>  
    </div>
    <script src="/application/view/JavaScript/regist.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

