{include file='common/header.tpl'}


<div class="row header">
    <div class="col-sm-2 col-md-2 col-lg-2 logo">

        <img src="{$BASE_URL}images/assets/register.png" alt="Image">

    </div>
    <div class=" col-sm-10 col-md-10 col-lg-10">

        <h1>{$title}</h1>
        <h5>Please login below:</h5>

    </div>
</div>

<form role="form" id="reg_form" action="{$BASE_URL}actions/registrations/{$action_page}" method="post">

 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

    <div class="container-fluid">
	<p> <br/></p>
		<div class="row header">



				<div class="panel panel-default">

					<div class="panel-body">

						<div class="panel-header">
						<div class="text-center">
						<h3>Login Area</h3>
						</div>
						</div>
					<form role="form">

						<div class="form-group">
							<label for="inputUserName">Username</label>

							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="username" class="form-control" id="inputUserName" placeholder="Enter email">
							</div>

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>

								<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>

						</div>
						<hr/>
						<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button>
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
						<p><br/></p>
					</form>

					</div>



		</div>
		</div>
	
	</div>
	</div>
	

</form>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{$BASE_URL}/javascript/registration.js"></script>

{include file='common/footer.tpl'}




