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
        <h2>UPDATE</h2>
        <div class="">
            <div class=" ">
                <form action="/user/modify" method="post" class="modiForm form grid formCenter">
                    <label for="user_id">ID</label>
                    <input type="text" id="user_id" class="inputTag" name="user_id" value="<?php echo $this->result[0]["user_id"] ?>" placeholder="ID" readonly>
                    <label for="user_name">NAME</label>                                                       
                    <input type="text" id="user_name" class="inputTag" name="user_name" placeholder="NAME" value="<?php echo isset($this->arrError["user_name"]) ? $_POST["user_name"] : $this->result[0]["user_name"]  ?>" >
        
                    <label for="user_nowpw">현재 비밀번호</label>
                    <input type="text" id="user_nowpw" class="inputTag" name="user_nowpw"  placeholder="NOW PASSWORD" value="<?php echo $this->result[0]["user_pw"] ?>" readonly>

                    <label for="user_pw">새 비밀번호</label>
                    <input type="password" id="user_pw" class="inputTag" name="user_pw" placeholder="NEW PASSWORD" value="<?php echo isset($this->arrError["user_pw"]) || !(isset($_POST["user_pw"])) ? "" : $_POST["user_pw"] ?>">
                    <span class="registErr">
                        <?php 
                        if(isset($this->arrError["user_pw"])){ 
                            echo $this->arrError["user_pw"]; 
                        }?>
                    </span>
                    <label for="pwCheck">새 비밀번호 확인</label>
                    <input type="password" id="pwCheck" name="pwCheck" class="inputTag" placeholder="PASSWORD CHECK" value="<?php echo isset($this->arrError["pwCheck"]) || !(isset($_POST["pwCheck"])) ? "" : $_POST["pwCheck"] ?>">
                    <span class="registErr">
                        <?php 
                        if(isset($this->arrError["pwCheck"])){ 
                            echo $this->arrError["pwCheck"]; 
                        }?>
                    </span>
                    <button type="submit" class="btn btn-secondary  modifyBtn">수정하기</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <?php require_once("application/view/footer.php") ?>

    <script src="/application/view/JavaScript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>