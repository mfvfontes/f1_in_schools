{include file='common/header.tpl'}

<div class="row header">
    <div class="col-sm-2 col-md-2 col-lg-2 logo">

        <img src="{$BASE_URL}images/assets/register.png" alt="Image">

    </div>
    <div class=" col-sm-10 col-md-10 col-lg-10">

        <h1>{$title}</h1>
        <h5>Insert e-mail addresses:</h5>

    </div>
</div>

<form role="form" id="reg_form" action="{$BASE_URL}actions/registrations/{$action_page}" method="post">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
    	<input type="submit" value="Register">
    </div>
</form>

<!--
<div class="row" id="zero" style="display: none">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group">
            <input type="email" class="form-control" id="email" ">
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>
-->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{$BASE_URL}/javascript/registration.js"></script>

{include file='common/footer.tpl'}