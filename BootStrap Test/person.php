<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/sidebar.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">

                    <img src="assets/F1_logo.png" class="img-responsive" alt="F1 in Schools">

                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">Profile</a>
            </li>
            <li>
                <a href="#">Team</a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="#">Edit Profile</a>
            </li>
            <li>
                <a href="#">Change Password</a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="#">Contacts </a>
            </li>
        </ul>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">

            <div class="row header">
                <div class="col-sm-2 col-md-2 col-lg-2 logo">

                    <img src="assets/m_neto.jpg" alt="Image">

                </div>
                <div class=" col-sm-10 col-md-10 col-lg-10">
                    <h5>User</h5>
                    <h1>Miguel Neto</h1> <br>

                </div>
            </div>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong class="">
                                Birth Date
                            </strong>
                        </span>
                            15/05/1997
                        </li>
                        <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong class="">
                                Team Role
                            </strong>
                        </span>
                            Graphic Designer
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong class="">
                                Full Name
                            </strong>
                        </span>
                        Miguel José Carvalho Neto
                    </li>
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong class="">
                                Birth Date
                            </strong>
                        </span>
                        15/05/1997
                    </li>
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong class="">
                                Team Role
                            </strong>
                        </span>
                        Graphic Designer
                    </li>
                    <li class="list-group-item text-right">
                        <span class="pull-left">
                            <strong class="">
                                Contact
                            </strong>
                        </span>
                        <a href="mailto:geral.spectrum@gmail.com">miguel.spectrum@gmail.com</a>
                    </li>
                </ul>

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>

            <div class="row">
                <h3>
                    Friends
                </h3>
                <a href="#" class="thumbnail">
                    <img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10395846_242491799280041_6677937232684072250_n.jpg?oh=35da463068849ab0de086930f32468e9&oe=5585922F&__gda__=1433738662_4abc67140b614652874b584597e236f3" class="img-responsive" alt="Image">
                    Jorge Wolfs
                </a>
                <a href="#" class="thumbnail">
                    <img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10420325_242491802613374_2386373263950269654_n.jpg?oh=e71c3b26f6a7b7d9d394f48d23fa1320&oe=557A70C3&__gda__=1435086623_486f66c7f0e7700bf2ae0dca6ce8bfd1" class="img-responsive" alt="Image">
                    Duarte Frazão
                </a>
                <a href="#" class="thumbnail">
                    <img src="https://scontent-mad.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/10173754_242491785946709_5027555459251999978_n.jpg?oh=06183e0f1866de5260cab99d742ac08e&oe=5588643A" class="img-responsive" alt="Image">
                    João Carvalho
                </a>
                <a href="#" class="thumbnail">
                    <img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10350436_242491812613373_5957730412234278246_n.jpg?oh=62be9be78f28d1a4b1592c534708536d&oe=55814423&__gda__=1434675017_86d3c77b96ecd0d2a08b8a4ccefa5f58" class="img-responsive" alt="Image">
                    Renato Campos
                </a>
            </div>


            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>