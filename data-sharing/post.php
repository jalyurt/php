<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form id="form" method="POST" action="" onsubmit="">

      <label for="username">Username</label><br>
      <input type="text" name="username" id="username" maxlength="20" placeholder="John123" autofocus required><br>
      <input type="submit" value="Submit" id="submit">
    </form>

    <?php
      if (!empty($_POST)) {
        echo "<div>"."Welcome ".$_POST["username"]."!";
      }
     ?>

  </body>
</html>
