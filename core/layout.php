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

        <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $meta['title']; ?> </title>
       
      </head>
    <body>
      <header>
        <nav>
            <ul>
            
              <li><a class="nav-link<?php echo active('index.php');?>" href="http://localhost/example.com/public/index.php"> Home</a></li>
              <li><a class="nav-link<?php echo active('resume.php');?>" href="http://localhost/example.com/public/resume.php">Resume</a></li>
              <li><a class="nav-link<?php echo active('contact.php');?>"href="http://localhost/example.com/public/contact.php">Contact</a></li>
              <li><a class="nav-link<?php echo active('logout.php');?>"href="http://localhost/example.com/public/logout.php">Logout</a></li>
              <li><a class="nav-link<?php echo active('login.php');?>"href="http://localhost/example.com/public/login.php">Login</a></li>
              <li><a class="nav-link<?php echo active('register.php');?>"href="http://localhost/example.com/public/register.php">Register</a></li>
              <li><a class="nav-link<?php echo active('posts.php');?>"href="http://localhost/example.com/public/posts/index.php">Posts</a></li>
              <li><a class="nav-link<?php echo active('users.php');?>"href="http://localhost/example.com/public/users/index.php">User</a></li>

            </ul>
          </nav>
        </header>

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, Roman</div>
                <img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

        <div id="Footer" class="clearfix">
            <small>&copy; 2017 - MyAwesomeSite.com</small>
            <ul role="navigation">
                <li><a class="nav-link<?php echo active('terms.php');?>"href="http://localhost/example.com/public/terms.php">Terms</a></li>
                <li><a class="nav-link<?php echo active('privacy.php');?>"href="http://localhost/example.com/public/privacy.php">Privacy</a></li>
                <li><a class="nav-link<?php echo active('cookies.php');?>"href="http://localhost/example.com/public/cookies.php">Cookies</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>