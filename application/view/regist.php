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


    <div class="center container">
        <div class="formCenter">
        <h2>Sign Up</h2>
        <div class="">


                    <form action="/user/regist" method="post" class="grid form registForm">
                        <?php 
                        if(isset($this->arrError["user_id"])){ ?>
                        <span class="registErr">
                        <?php
                            echo $this->arrError["user_id"]; 
                        ?>
                        </span>
                        <?php
                        }?>
                        <?php 
                        if(isset($this->errMsg)){ ?>
                        <span class="registErr">
                        <?php
                            echo $this->errMsg;
                        ?>
                        </span>
                        <?php
                        }?>
                        <div class="idCheck">
                            <input type="text" placeholder="ID" name="user_id" id="user_id"  class="inputTag idWidth" value="<?php echo isset($this->arrError["user_id"]) ? $_POST["user_id"] : "" ?>" >
                            <button type = "button" class="btn btn-secondary  btnMargin btnMarginBottom" onclick="checkDuplication()" >Check</button>
                        </div>
                        <?php 
                        if(isset($this->arrError["user_pw"])){ ?>
                        <span class="registErr">
                        <?php
                            echo $this->arrError["user_pw"]; 
                        ?>
                        </span>
                        <?php
                        }?>

                        
                        <input type="password" placeholder="PASSWORD" name="user_pw" id="user_pw" class="inputTag" value="<?php echo isset($this->arrError["user_pw"]) ? $_POST["user_pw"] : "" ?>">
                        <?php 
                        if(isset($this->arrError["pwCheck"])){ ?>
                        <span class="registErr">
                        <?php
                            echo $this->arrError["pwCheck"]; 
                        ?>
                        </span>
                        <?php
                        }?>
            
                        <input type="password" placeholder="PASSWORD CHECK" name="pwCheck" id="pwCheck"  class="inputTag" value="<?php echo isset($this->arrError["pwCheck"]) ? $_POST["pwCheck"] : "" ?>">
                        <?php 
                        if(isset($this->arrError["user_name"])){ ?>
                        <span class="registErr">
                        <?php
                            echo $this->arrError["user_name"]; 
                        ?>
                        </span>
                        <?php
                        }?>
                        <input type="text" placeholder="NAME" name="user_name" id="user_name" class="inputTag" value="<?php echo isset($this->arrError["user_name"]) ? $_POST["user_name"] : "" ?>">
                        <button type="submit" class="btn btn-secondary btnGroup signUpBtn">Sign up</button>
                </form>
            </div>  
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

