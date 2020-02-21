<?php

// Start the session
session_start();

?>

<!DOCTYPE html>
<html>
<body>

<h1>Session</h1>

<!-- if session is not set and form has not been submitted, show form -->
<?php if (!isset($_SESSION['username']) AND empty($_POST['username'])) : ?>

        <strong>Enter name</strong>
        <form action="/session.php" method="POST">
                <input type="text" name="username"/>
                <input type="submit" name="Submit" value="Submit!" />
        </form>
<?php endif; ?>

<!-- if session is set, show welcome message, else if form has been submitted, set session and show welcome message -->
<?php
        if (isset($_SESSION['username'])) {
                echo "Welcome ". $_SESSION['username']."!"." Refresh this page, if your session is valid, the form will not be shown.";
        } elseif (!empty($_POST['username'])) {

                $_SESSION["username"] = $_POST['username'];
                header("Location: ".$_SERVER['REQUEST_URI']);
                exit();
        }
?>

</body>
</html>
