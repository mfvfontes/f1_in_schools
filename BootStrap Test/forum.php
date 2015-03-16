<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spectrum</title>
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
                <a href="#">Insert Photo</a>
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

                    <img src="assets/search-01.png" alt="Image">

                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4">
                    <h1>Forum</h1> <br>

                </div>


            </div>

            <div class="row">

                <h3>
                    Competition Regulations
                </h3>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Title</th>
                        <th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Original Poster</th>
                        <th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Last Poster</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#">Rule #01</a>
                        </td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Rule #04</a>
                        </td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Rule #21</a>
                        </td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Rule #31</a>
                        </td>
                        <td>John Doe</td>
                        <td>John Doe</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        <div class="row">

            <h3>
                Technical Regulations
            </h3>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Title</th>
                    <th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Original Poster</th>
                    <th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Last Poster</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="#">Rule #01</a>
                    </td>
                    <td>John Doe</td>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Rule #04</a>
                    </td>
                    <td>John Doe</td>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Rule #21</a>
                    </td>
                    <td>John Doe</td>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Rule #31</a>
                    </td>
                    <td>John Doe</td>
                    <td>John Doe</td>
                </tr>
                </tbody>
            </table>



        </div>


        <div class="row">
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