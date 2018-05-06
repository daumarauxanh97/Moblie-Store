<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login-Admin</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/metisMenu.min.css" rel="stylesheet">
    <link href="../public/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
   <div class="row" style="width: 100%;">
     <div class="col-md-12">
       <h1 style="text-align: center;padding-top: 30px;">Admin Login</h1>
     </div>
   </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                      <form role="form" method="POST" action="?c=login&m=handel" class="form-signin">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="user" type="Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSubmit">
                                Sign in</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/metisMenu.min.js"></script>
    <script src="../public/js/sb-admin-2.js"></script>

</body>

</html>