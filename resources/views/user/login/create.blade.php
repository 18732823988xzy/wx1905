<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员添加</title>
</head>
<body>
                <form action="{{url('login/store')}}" method="post">
                    账号: <input type="text" name="user_name"> <br>
                    密码: <input type="password" name="password"> <br>
                    <input type="submit" value="提交">
                </form>
</body>
</html>