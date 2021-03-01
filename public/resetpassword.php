<?php
require '../core/db_connect.php';
require '../core/About/src/Validation/Validate.php';
require '../core/bootstrap.php';
checkSession();

use About\Validation;

$valid = new About\Validation\Validate();
$message=null;

$input = filter_input_array(INPUT_POST,[
    'email'=>FILTER_SANITIZE_EMAIL,
    'password'=>FILTER_UNSAFE_RAW,
    'newpassword'=>FILTER_UNSAFE_RAW
    ]);

if(!empty($input)){

        $input = array_map('trim', $input);
        $sql='SELECT id, hash FROM users WHERE email=:email';
        $stmt=$pdo->prepare($sql);
        $stmt->execute([
            'email'=>$input['email']
        ]);
        $row=$stmt->fetch();
    
        if($row){
            // 5. Attempt a password match
            $match = password_verify($input['password'], $row['hash']);

        if($match){
            
            $hash = password_hash($input['newpassword'], PASSWORD_DEFAULT); 
                
        $sql='INSERT INTO 
        users 
        SET 
            email=:email,
            hash=:hash
        ';
        $stmt=$pdo->prepare($sql);

        try {

            $stmt->execute([
                'hash'=>$hash
            ]);

            header('LOCATION: login.php');

        }catch(PDOException $e) {
            $message = 'Something went wrong.';
         }
        }
        }
    
}

$meta=[];
$meta['title']="Password reset";
$content= <<<EOT

<form method="post">
<div class="form-group">
<label for="email">Email</label>
<input 
    id="email"
    name="email"
    type="email"
>
</div>

<div class="form-group">
    <label for="password">Current Password </label>
    <input id="password" type="password" name="password"
</div>

<div class="form-group">
    <label for="newpassword">New Password</label>
    <input id="newpassword" type="password" name="newpassword"
</div>

<div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
</div>
</form>
EOT;

require '../core/layout.php';