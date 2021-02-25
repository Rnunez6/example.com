<?php
require '../core/db_connect.php';
require '../core/About/src/Validation/Validate.php';
require '../core/bootstrap.php';
checkSession();

use About\Validation;

$valid = new About\Validation\Validate();

$input = filter_input_array(INPUT_POST,[
    'password'=>FILTER_UNSAFE_RAW
    ]);

$valid->check($input);

$content= <<<EOT
<form method="post">
<div class="form-group">
    <label for="thecurrentpassword">Current Password </label>
    <input id="currentpassword" type="password" name="currentpassword">
</div>

<div class="form-group">
    <label for="newpassword">New Password</label>
    <input id="newpassword" type="password" name="newpassword"
    value="{$valid->userInput('confirm_password')}" >
</div>

<div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
</div>
</form>
EOT;
require '../core/layout.php';