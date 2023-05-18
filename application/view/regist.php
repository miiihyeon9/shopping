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
        <h2>Sign Up</h2>
        <div class="loginPage">
            <div class="loginFormBox">

                    <form action="/user/regist" method="post" class="loginForm">
                        <span id="errMsgId"class="registPad">
                            <?php 
                        if(isset($this->arrError["user_id"])){ 
                            echo $this->arrError["user_id"]; 
                        }?>
                        </span>
                        <div class="checkBtnGrid">
                            <input type="text" placeholder="ID" name="user_id" id="user_id"  class="registPad inputHeight" value="<?php echo isset($this->arrError["user_id"]) ? $_POST["user_id"] : "" ?>" >
                            <button type = "button" class="btn btn-secondary registPad btnMargin btnMarginBottom" onclick="checkDuplication()" >Check</button>
                        </div>
                        <span><?php if(isset($this->errMsg)){ echo $this->errMsg; }?></span>
                        <input type="password" placeholder="PASSWORD" name="user_pw" id="user_pw" class="registPad" value="<?php echo isset($this->arrError["user_pw"]) ? $_POST["user_pw"] : "" ?>">
                        <span class="registPad">
                        <?php 
                        if(isset($this->arrError["user_pw"])){ 
                            echo $this->arrError["user_pw"]; 
                        }?>
                        </span>
                        <input type="password" placeholder="PASSWORD CHECK" name="pwCheck" id="pwCheck"  class="registPad" value="<?php echo isset($this->arrError["pwCheck"]) ? $_POST["pwCheck"] : "" ?>">
                        <span class="registPad">
                        <?php 
                        if(isset($this->arrError["pwCheck"])){ 
                            echo $this->arrError["pwCheck"]; 
                        }?>
                        </span>
                        <input type="text" placeholder="NAME" name="user_name" id="user_name" class="registPad" value="<?php echo isset($this->arrError["user_name"]) ? $_POST["user_name"] : "" ?>">
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

