<?php include './index.php'?>
<?php include './wrapper.php'?>

    <section class="singup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="User Name...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="repwd" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>

<?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyimput") {
            echo "<p>FILL in all Fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper Username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper Email!</p>";
        }
        else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>password dont match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>You have sign up!</p>";
        }
    }
    ?>
    </section>