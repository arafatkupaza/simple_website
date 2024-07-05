<?php
    include_once 'header.php';
?>
        <div class="container">
            <form action="includes/sign.inc.php" method="post">
                <h2>Sign In</h2>
                <input type="text" name="username" placeholder="Enter your user name" required ><br>
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <input type="text" name="sex" placeholder="Eg; 'male' or 'female'" required><br>
                <input type="number" name="number" placeholder="phone Number" required><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <input type="password" name="password2" placeholder="repeat your password" required><br>
                <button value="submit" name="submit">sign In</button>
                <button value="reset"  name="reset">Reset</button>
            </form>
        </div>
<?php include_once 'footer.php'; ?>