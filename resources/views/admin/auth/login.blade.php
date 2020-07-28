<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>管理员登录</title>

    <style>
        html, body {
            height: 100%
        }
    </style>
</head>
<body>
    <div class="container-fluid h-100 bg-secondary">
        <div class="row h-100  align-items-center">
            <div class="col">
                <form action="{{ route('admin.login')}}" method="post">
                    <div class="row form-group justify-content-center">
                        <label for="" class="col-form-label col-sm-1">用户名</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>

                    <div class="row form-group justify-content-center">
                        <label for="" class="col-form-label col-sm-1">密码</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="row form-group justify-content-center">
                        <label for="" class="col-form-label col-sm-1"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">确定</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</body>
</html>