
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/metisMenu.min.css" rel="stylesheet">
    <link href="../public/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a a href="?c=login&m=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="?c=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?c=product">Phone</a>
                                </li>
                                <li>
                                    <a href="">Tablet</a>
                                </li>
                                <li>
                                    <a href="?c=laptop">Laptop</a>
                                </li>
                                <li>
                                    <a href="">Linh kiện</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-apple fa-fw"></i>Hãng sản xuất</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-user fa-fw"></i>Admins</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cart-plus fa-fw"></i>Orders</a>                          
                        </li>                  
                    </ul>
                    <div class="center p-20" style="margin-top: 30px;">
                    <span ><a href="?c=login&m=logout"  class="btn btn-danger btn-block btn-rounded waves-effect waves-light" >Logout</a></span>
                </div>
                </div>
            </div>
        </nav>



    </div>
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/metisMenu.min.js"></script>
    <script src="../public/js/sb-admin-2.js"></script>

</body>

</html>