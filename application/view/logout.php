<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    성공했슴다
    <button id="logout" onclick="redirectLogout()">Logout</button>
    <script>
        function redirectLogout(){
            location.href="/user/logout";
        }
    </script>
</body>
</html>