<?php




?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="logout" onclick="redirectLogout()">Logout</button>
    <script>
        function redirectLogout(){
            location.href="/shop/main";
        }
    </script>
</body>
</html>