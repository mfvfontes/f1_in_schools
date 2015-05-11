{include file='common/header.tpl'}



{if !is_null($ERROR_MESSAGES)}

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-danger">
            <div class="panel-heading">
                Errors in the form are listed below
            </div>
            <div class="panel-body">
                {foreach from=$ERROR_MESSAGES item=foo}
                    <p>
                        {$foo}
                    </p>
                {/foreach}
            </div>
        </div>
    </div>
{/if}


<form role="form" id="reg_form" action="{$BASE_URL}actions/registrations/complete_registration.php" method="post">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

        <div class="panel panel-info">
            <div class="panel-body">

                <label for="inputName" class="sr-only">Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                </div>

                <label for="inputPassword" class="sr-only">Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>

                <label for="confirm_password" class="sr-only">Re-enter Password</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re-enter Password" required>
                </div>

                <label for="country" class="sr-only">Country</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
                    <select name="country" id="country" class="form-control" required>

                        <option value="" disabled>Select your Country</option>

                        {foreach from=$countries item=country}
                            <option value=$country.code> {$country.name} </option>
                        {/foreach}

                    </select>
                </div>

                <label for="birthday" class="sr-only">Birth Date</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    <input type="date" name="dob" value="" class="form-control" placeholder="Select Date" required />
                </div>

                <div class="checkboxGender">
                    <label for="Gender" class="control-label">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="M" checked> Male
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="gender" value="F" > Female
                        </label>
                    </label>
                </div>
                {if ! is_null($schools)}
                    <label for="school" class="sr-only">Country</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                        <select id="schoolSelect" class="form-control" name="schoolID">
                            <option value=""></option>
                            {foreach from=$schools item=school}
                                <option value="{$school.schoolid}">{$school.name}</option>
                            {/foreach}
                        </select>
                    </div>
                {/if}

                <input type="hidden" value="{$email}" name="email">
                <input type="hidden" value="{$rType}" name="rType">
                <input type="hidden" value="{$rID}" name="rID">

                <button class="btn btn-lg  btn-block" type="submit">Sign Up</button>
            </div>

        </div>
    </div>

</form>


<!-- jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

<script src="{$BASE_URL}/javascript/registrations/form_validation.js"></script>
<script src="{$BASE_URL}/javascript/searchable/jquery.searchabledropdown-1.0.8.min.js"></script>
<script src="{$BASE_URL}/javascript/searchable/jquery.searchabledropdown-1.0.8.src.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#schoolSelect").searchable();
    });
</script>

<script src="{$BASE_URL}/javascript/registration.js"></script>

{include file='common/footer.tpl'}




