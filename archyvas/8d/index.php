<?php
var_dump($_POST);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rimas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form method="POST">
    <div class="lentele">
      <?php
        include "users.php";
        if  (empty($_POST)) {
        include "form.php";
       } else {
        include "action.php";
       };
      ?>
    </div>
  </form>
</body>
</html>