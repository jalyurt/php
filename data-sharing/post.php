<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST['username'];
    if (empty($username)) {
        echo "Please fill in your name.<br><br>";
    }else {
        echo htmlentities("Welcome, ".$username."!");
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Username:<br>
  <input type="text" name="username" placeholder="enter username..."><br>
  <input type="submit" value="Submit">
</form>
