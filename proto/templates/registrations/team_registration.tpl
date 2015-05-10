{include file='common/header.tpl'}


<div class="row header">
    <div class="col-sm-2 col-md-2 col-lg-2 logo">

        <img src="{$BASE_URL}images/assets/register.png" alt="Image">

    </div>
    <div class=" col-sm-10 col-md-10 col-lg-10">

        <h1>{$title}</h1>
        <h5>Complete your Team registration:</h5>

    </div>
</div>

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


<form role="form" id="reg_form" action="{$BASE_URL}actions/registrations/{$action_page}" method="post">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

        <div class="panel panel-info">
            <div class="panel-body">
                <form class="form-register">

                    <label for="inputName" class="sr-only">Name</label>

                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" name="teamName" id="teamName" class="form-control" placeholder="Team Name" required>

                    </div>




                    <label for="Members" class="col-xs-8 control-label">Members:</label>
                    <div class="col-xs-10">

                        <input type="email" name="participant1" id="participant1" class="form-control" placeholder="first participant email" required>


                        <label for="inputParticipant2" class="sr-only">parti2</label>


                        <input type="email" name="participant2"  id="participant2" class="form-control" placeholder="second participant email" required>


                        <label for="inputParticipant3" class="sr-only">parti3</label>


                        <input type="email" name="participant3" id="participant3" class="form-control" placeholder="third participant email" required>


                        <label for="inputparticipant4" class="sr-only">patri4</label>


                        <input type="email" name="participant4" name="participant4" id="participant4" class="form-control" placeholder="fourth participant email" required>


                        <label for="inputparticipant5" class="sr-only">parti5</label>


                        <input type="email" name= "participant5" id="participant5" class="form-control" placeholder="fifth participant email" required>

                    </div>

                    <button class="btn btn-lg  btn-block" type="submit">Sign Up</button>
                </form>
            </div>

        </div>
    </div>

</form>

<!-- jQuery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script>
<script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

<script src="{$BASE_URL}/javascript/registrations/form_validation.js"></script>


<script src="{$BASE_URL}/javascript/registration.js"></script>

{include file='common/footer.tpl'}



