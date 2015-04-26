{include file='common/header.tpl'}


	<div class="row header">
		<div class="col-sm-2 col-md-2 col-lg-2 logo">

			<img src="{$BASE_URL}images/assets/register.png" alt="Image">

		</div>
		<div class=" col-sm-10 col-md-10 col-lg-10">

			<h1>{$title}</h1>
			<h5>Complete your registration:</h5>

		</div>
	</div>

	<form role="form" id="reg_form" action="{$BASE_URL}actions/registrations/{$action_page}" method="post">

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

		<div class="panel panel-info">
			<div class="panel-body">
				<form class="form-register">
			
				<label for="inputName" class="sr-only">Name</label>
               
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					<input type="name" id="inputName" class="form-control" placeholder="Name" required>
					</div>
										
					<label for="inputEmail" class="sr-only">Email address</label>
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-exclamation-sign"></span></span>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
					</div>
			   
			   			  
					<label for="inputPassword" class="sr-only">Password</label>
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
					</div>
				
				
				
					<label for="input2Password" class="sr-only">Re-enter Password</label>
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="2password" id="input2Password" class="form-control" placeholder="Re-enter Password" required>
					</div>
				
					<label for="inputCountry" class="sr-only">Country</label>
					<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
					<input type="country" id="inputCountry" class="form-control" placeholder="Country" required>
					</div>
				
								
					<div class="form-group">
					<label for="birthday" class="col-xs-8 control-label">Birthday:</label>
						<div class="col-xs-10">
							<div class="form-block">
								<div class="form-group">
									<input type="date" name="dob" value="" placeholder="Select Date" required />
								</div>
							</div>
						</div>
				
				
				
					<div class="checkboxGender">
						<label for="Gender" class="col-xs-5 control-label">Gender:
					
							<input type="checkbox" value="genderM"> Male    
						
							<input type="checkbox" value="genderF"> Female
						
						</label>
              
				
					<div class="TermsOfUse">
						<label>
						<h6> By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</h6>
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
				</form>
			</div>
	
		</div>
	</div>

</form>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{$BASE_URL}/javascript/registration.js"></script>

{include file='common/footer.tpl'}




