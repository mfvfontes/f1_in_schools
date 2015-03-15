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
                    <h5>Search</h5>
                    <h1>Forum</h1> <br>

                </div>

                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Team Name">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Submit</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->

            </div>

            <div class="row">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Team Name</th>
                        <th>Location</th>
                        <th>Average Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#">Spectrum</a>
                        </td>
                        <td>Viseu</td>
                        <td>923</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">V-Racers</a>
                        </td>
                        <td>Viseu</td>
                        <td>700</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">CarbonSport</a>
                        </td>
                        <td>Viseu</td>
                        <td>210</td>
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