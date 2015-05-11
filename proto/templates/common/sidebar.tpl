<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                <img src="{$BASE_URL}/images/assets/F1_logo.png" alt="F1 in Schools Logo">
            </a>
        </li>
        <li class="divider"></li>


        {if !is_null($smarty.session.name)}

            <li>
                Welcome {$smarty.session.name}
            </li>
            <li>
                <a href="{$BASE_URL}/actions/users/logout.php">Log Out</a>
            </li>

            <li class="divider"></li>
            <li>
                <a href="{$BASE_URL}pages/search/users.php">Users</a>
            </li>
            <li>
                <a href="#">Profile</a>
            </li>
            <li>
                <a href="#">Team</a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="{$BASE_URL}pages/users/edit_profile.php">Edit Profile</a>

            <li>
                <a href="{$BASE_URL}pages/users/edit_password.php">Change Password</a>
            </li>
            <li>
                <a href="#">Insert Photo</a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="#">Contacts </a>
            </li>

        {else}
            <li id="login">
                <form role="form" id="log_form" action="{$BASE_URL}actions/users/login.php" method="post">
                    <label for="email" class="sr-only">Name</label>
                    <div class="input-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <label for="logpassword" class="sr-only">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" id="logpassword" class="form-control" placeholder="Password" required>
                    </div>

                    <button class="btn btn-default btn-xs" type="submit">Log In</button>
                </form>

            </li>

        {/if}


    </ul>

</div>