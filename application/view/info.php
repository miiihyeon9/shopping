<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once("application/view/header.php"); ?>
    <form action="">
        <label for="user_id">ID</label>
        <input type="text" id="user_id" value="<?php echo $this->result[0]["user_id"] ?>" readonly>
        
        <label for="user_pw">Password</label>
        <input type="password" id="user_pw" value="<?php echo $this->result[0]["user_pw"] ?>" readonly>
        
        <label for="user_name">NAME</label>
        <input type="text" id="user_name" value="<?php echo $this->result[0]["user_name"] ?>" readonly>
    </form>
    <!-- <button id="logout" onclick="redirectLogout()">Logout</button>
    <script>
        function redirectLogout(){
            location.href="/user/logout";
        }
    </script> -->
    <form action="/user/logout" method="get">
    <button id="logout">Logout</button>
    </form>
    <form action="/user/modify" method="get">
    <button id="logout">수정하기</button>
    </form>
</body>
</html>