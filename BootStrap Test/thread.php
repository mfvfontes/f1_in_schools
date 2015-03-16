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

                    <img src="assets/forum-01.png" alt="Image">

                </div>
                <div class=" col-sm-10 col-md-10 col-lg-10">
                    <h5>Technical Regulation</h5>
                    <h1>Rule #01</h1> <br>
                </div>
            </div>

            <div class="row">
                <div class="panel panel-default reply">
                    <div class="panel-body">
                        <div class=" col-sm-2 col-md-2 col-lg-2" style="text-align: center">
                            <img src="assets/m_neto.jpg" class="img-responsive" alt="Image">

                            <h5>John Doe</h5>

                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nibh a ipsum rutrum, id mollis ligula dignissim. Nullam mollis velit a pulvinar sodales. Donec tempus nec dui laoreet pretium. Morbi ornare justo turpis, dapibus aliquam quam congue in. Vivamus egestas orci dui. Donec non pellentesque sapien, eget consectetur augue. Sed elementum nibh nibh, et aliquet erat semper nec. Curabitur malesuada volutpat ante, nec vulputate nibh dignissim sit amet. Integer eget tellus vel libero ornare fermentum. Curabitur eget tortor id lectus hendrerit tincidunt in ac quam. Etiam orci est, mattis sit amet semper sed, accumsan a risus.

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default reply">
                    <div class="panel-body">
                        <div class=" col-sm-2 col-md-2 col-lg-2" style="text-align: center">
                            <img src="assets/m_neto.jpg" class="img-responsive" alt="Image">

                            <h5>John Doe</h5>

                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nibh a ipsum rutrum, id mollis ligula dignissim. Nullam mollis velit a pulvinar sodales. Donec tempus nec dui laoreet pretium. Morbi ornare justo turpis, dapibus aliquam quam congue in. Vivamus egestas orci dui. Donec non pellentesque sapien, eget consectetur augue. Sed elementum nibh nibh, et aliquet erat semper nec. Curabitur malesuada volutpat ante, nec vulputate nibh dignissim sit amet. Integer eget tellus vel libero ornare fermentum. Curabitur eget tortor id lectus hendrerit tincidunt in ac quam. Etiam orci est, mattis sit amet semper sed, accumsan a risus.

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default reply">
                    <div class="panel-body">
                        <div class=" col-sm-2 col-md-2 col-lg-2" style="text-align: center">
                            <img src="assets/m_neto.jpg" class="img-responsive" alt="Image">

                            <h5>John Doe</h5>

                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis nibh a ipsum rutrum, id mollis ligula dignissim. Nullam mollis velit a pulvinar sodales. Donec tempus nec dui laoreet pretium. Morbi ornare justo turpis, dapibus aliquam quam congue in. Vivamus egestas orci dui. Donec non pellentesque sapien, eget consectetur augue. Sed elementum nibh nibh, et aliquet erat semper nec. Curabitur malesuada volutpat ante, nec vulputate nibh dignissim sit amet. Integer eget tellus vel libero ornare fermentum. Curabitur eget tortor id lectus hendrerit tincidunt in ac quam. Etiam orci est, mattis sit amet semper sed, accumsan a risus.

                        </div>
                    </div>
                </div>
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