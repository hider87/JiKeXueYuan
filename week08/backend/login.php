
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable;" />
    <meta charset="utf-8">
    <title>后台登陆界面</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="denglu.css">
</head>

<body>
    <!--这是容器-->
    <div class="container">
        <p class="text-center">后台登陆管理系统</p>
        <form class="form-inline">
            <div class="form-group div1">
                <label for="user">用户名：</label>
                <input type="text" class="form-control" id="user" placeholder="user" autofocus="autofocus">
            </div>
            <br />
            <div class="form-group div2">
                <label for="Password">密&nbsp;&nbsp;&nbsp;码：</label>
                <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <br />
            <a class="btn btn-default btn-info" href="manage.php" role="button">登陆</a>
        </form>
    </div>
</body>

</html>


