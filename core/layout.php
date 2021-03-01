<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
  <?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">

        <!-- <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $meta['title']; ?> </title>

        
      </head>
<body>
  <div class= "container">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a><?php echo $meta['title']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            
              <li><a class="nav-link<?php echo active('index.php');?>" href="http://localhost/example.com/public/index.php"> Home</a></li>
              <li><a class="nav-link<?php echo active('resume.php');?>" href="http://localhost/example.com/public/resume.php">Resume</a></li>
              <li><a class="nav-link<?php echo active('contact.php');?>"href="http://localhost/example.com/public/contact.php">Contact</a></li>
              <li><a class="nav-link<?php echo active('logout.php');?>"href="http://localhost/example.com/public/logout.php">Logout</a></li>
              <li><a class="nav-link<?php echo active('login.php');?>"href="http://localhost/example.com/public/login.php">Login</a></li>
              <li><a class="nav-link<?php echo active('register.php');?>"href="http://localhost/example.com/public/register.php">Register</a></li>
              <li><a class="nav-link<?php echo active('posts.php');?>"href="http://localhost/example.com/public/posts/index.php">Posts</a></li>
              <li><a class="nav-link<?php echo active('users.php');?>"href="http://localhost/example.com/public/users/index.php">User</a></li>
              <li><a class="nav-link<?php echo active('resetpassword.php');?>"href="http://localhost/example.com/public/resetpassword.php">ResetPassword</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <div class="card text-center">
 
       <div class="card-body">
        <p class="card-text"><?php echo $content; ?></p>
      </div>
      <div class="card-footer text-muted">
            <small>&copy; 2021 - MyAwesomeSite.com</small>
                <a class="nav-link<?php echo active('terms.php');?>"href="http://localhost/example.com/public/terms.php">Terms</a>
                <a class="nav-link<?php echo active('privacy.php');?>"href="http://localhost/example.com/public/privacy.php">Privacy</a>
                <a class="nav-link<?php echo active('cookies.php');?>"href="http://localhost/example.com/public/cookies.php">Cookies</a>
        </div>
    
  </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</html>