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

            <div class="row">
                <div class=" col-sm-10 col-md-10 col-lg-10">
                    <h5>User</h5>
                    <h1>Miguel Neto</h1> <br>

                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">

                    <img src="assets/m_neto.jpg" class="pull-right" alt="Image">

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
                </ul>

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>

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