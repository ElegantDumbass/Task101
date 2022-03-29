<?php include './index.php'?>
<?php include './wrapper.php'?>

    <section class="loginform-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log in</button>
        </form>
        <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyimput") {
            echo "<p>FILL in all Fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>incorrect!</p>";
        }
    }
    ?>
    </section>