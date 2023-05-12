<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <!-- '/' root에서 시작  -->
    <form action="/user/login" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" required>
        <label for="pw">PW</label>
        <input type="password" name="pw" id="pw" required>
    </form>
</body>
</html>