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
        <div class="loginPage">
            <div class="loginFormBox">
                <!-- <h3 style="color : red;"><?php // echo isset($this->errMsg) ? $this->errMsg : "" ?></h3> -->
                <form action="/user/regist" method="post" class="loginForm">
                    <input type="text" placeholder="ID" name="user_id" id="user_id" placeholder="ID" class="registPad">
                    <button type = "button" class="btn btn-secondary registPad btnMargin" onclick="checkDuplication()" >Check</button>
                    <span id="errMsgId"class="registPad">
                        <?php if(isset($this->errMsg)){?>
                            <span><?php echo $this->errMsg ?></span>
                        <?php } ?>
                    <?php 
                    if(isset($this->arrError["user_id"])){ 
                        echo $this->arrError["user_id"]; 
                    }?>
                    </span>
                    <input type="password" placeholder="PASSWORD" name="user_pw" id="user_pw" placeholder="PASSWORD" class="registPad">
                    <span class="registPad">
                    <?php 
                    if(isset($this->arrError["user_pw"])){ 
                        echo $this->arrError["user_pw"]; 
                    }?>
                    </span>
                    <input type="password" placeholder="PASSWORD CHECK" name="pwCheck" id="pwCheck" placeholder="PASSWORD CHECK" class="registPad">
                    <span class="registPad">
                    <?php 
                    if(isset($this->arrError["pwCheck"])){ 
                        echo $this->arrError["pwCheck"]; 
                    }?>
                    </span>
                    <input type="text" placeholder="NAME" name="user_name" id="user_name" placeholder="NAME" class="registPad">
                    <span class="registPad">
                    <?php 
                    if(isset($this->arrError["user_name"])){ 
                        echo $this->arrError["user_name"]; 
                    }?>
                    </span>
                    <button type="submit" class="btn btn-secondary registPad">Sign up</button>
                </form>
            </div>  
        </div>
    </div>
    <?php require_once("application/view/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/application/view/JavaScript/index.js"></script>
    <script src="/application/view/JavaScript/regist.js"></script>
</body>
</html>

