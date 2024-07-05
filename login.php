<?php
    include_once 'header.php';
?>
        <div class="container">
            <form action="login.inc.php" method="post">
                <h2>Sign In</h2>
                <input type="text" name="username" placeholder="Enter your user name" required ><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <input type="submit" value="submit">
            </form>
        </div>
<?php include_once 'footer.php'; ?>