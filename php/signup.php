<?php include '../header.php'?>

    <section class="singup-form">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="User Name...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdre" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </section>

<?php include '../footer.php'?>