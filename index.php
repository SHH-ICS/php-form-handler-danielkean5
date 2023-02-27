<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8" />
    <meta name="description" content="php form" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="Daniel Kean" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>My first php form</title>
  </head>

  <body>
    <form action="welcome.php" method="post">
      userName: <input type="text" userName="userName"><br>
      <input type="submit">
    </form>

    <?php
    echo "<h1>Hello, World!</h1>\n";
    ?>
    
  </body>
  
</html>
