

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="./dist/css/main.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $meta['title']; ?> </title>
       
      </head>
    <body>
      <header>
        <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="resume.php">Resume</a></li>
              <li><a href="contact.php">Contact</a></li>
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
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>