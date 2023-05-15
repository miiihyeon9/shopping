<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style="color : red;"><?php echo isset($this->errMsg) ? $this->errMsg : "" ?></h3>

    <form action="/user/regist" method="post">
        <label for="id">ID</label>
        <input type="text" placeholder="ID" name="id" id="id">
        <label for="id">PASSWORD</label>
        <input type="password" placeholder="PASSWORD" name="pw" id="pw">
        <label for="id">PASSWORD CHECK</label>
        <input type="password" placeholder="PASSWORD CHECK" name="pwCheck" id="pwCheck">
        <button type="submit" >Sign up</button>
    </form>
</body>
</html>
