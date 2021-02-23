<?php
require '../../core/bootstrap.php';
require '../../core/functions.php';
require '../../config/keys.php';
require '../../core/db_connect.php';


checkSession();

// Get the post
$get = filter_input_array(INPUT_GET);
$id = $get['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
$stmt->execute(['id'=>$id]);
$row = $stmt->fetch();
//If the id cannot be found kill the request
if(empty($row)){
  http_response_code(404);
  die('Page Not Found <a href="/">Home</a>');
}
//var_dump($row);
$meta=[];
$meta['first_name']= "Edit: {$row['first_name']}";
// Update the post
$message=null;
$args = [
    'id'=>FILTER_SANITIZE_STRING, //strips HMTL
    'first_name'=>FILTER_SANITIZE_STRING, //strips HMTL
    'last_name'=>FILTER_SANITIZE_STRING, //strips HMTL
    'email'=>FILTER_SANITIZE_STRING, //strips HMTL
];
$input = filter_input_array(INPUT_POST, $args);
if(!empty($input)){
    //Strip white space, begining and end
    $input = array_map('trim', $input);
    //Allow only whitelisted HTML
    $input['last_name'] = cleanHTML($input['last_name']);

    //Sanitized insert
    $sql = 'UPDATE
        users
      SET
        first_name=:first_name,
        last_name=:last_name,
        email=:email
      WHERE
        id=:id';
    if($pdo->prepare($sql)->execute([
        'first_name'=>$input['first_name'],
        'last_name'=>$input['last_name'],
        'email'=>$input['email'],
        'id'=>$input['id']
    ])){
       header('LOCATION:/example.com/public/users/view.php?id=' . $row['id']);
    }else{
        $message = 'Something bad happened';
    }
}
$content = <<<EOT
<h1>Edit: {$row['first_name']}</h1>
{$message}
<form method="post">
<input id="id" name="id" value="{$row['id']}" type="hidden">
<div class="form-group">
    <label for="first_name">First Name</label>
    <input id="first_name" name="first_name" type="text" class="form-control">
</div>

<div class="form-group">
    <label for="last_name">Last Name</label>
    <input id="last_name" name="last_name" type="text" class="form-control">
</div>

<div class="row">
    <div class="form-group col-md-6">
    <label for="email">Email</label>
    <input id="email" name="email" type="text" class="form-control">
    </div>
</div>

<div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
</div>
</form>
EOT;
include '../../core/layout.php';