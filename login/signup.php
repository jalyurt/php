<?php require "header.php"; ?>

<main>
    <h1>Signup</h1>
    <?php 
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
            echo 'Fill in all fields!';
        }
        else if($_GET['error'] == "invaliduidmail"){
            echo 'Invalid username and email!';
        }
        else if($_GET['error'] == "invaliduid"){
            echo 'Invalid username!';
        }
        else if($_GET['error'] == "invalidmail"){
            echo 'Invalid email!';
        }
        else if($_GET['error'] == "passwordcheck"){
            echo 'Your passwords do not match!';
        }
        else if($_GET['error'] == "usertaken"){
            echo 'Username is already taken!';
        }
    }
    else if($_GET['signup'] == 'success'){
        echo 'Signup successful!';
    }
    ?>
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
</main>

<?php require "footer.php"; ?>