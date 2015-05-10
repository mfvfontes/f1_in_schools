{include file='common/header.tpl'}

<form role="form" id="reg_form" action="{$BASE_URL}actions/registrations/{$action_page}" method="post">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]"> <!-- foi alterado aqui de email[] para email1 por causa do javascript -->
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">  <!-- foi alterado aqui de email[] para email2 por causa do javascript -->
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="mid">
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email[]">  <!-- foi alterado aqui de email[] para email3 por causa do javascript -->
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


<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script>
<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

<script src="{$BASE_URL}/javascript/registrations/form_validation.js"></script>
<script src="{$BASE_URL}/javascript/registration.js"></script>

{include file='common/footer.tpl'}