<?php
session_start();
include_once "header.php";

?>

    <div class="final">
        <div style = "font-size:30px;color:red">
            <?php echo "Hi ".$_SESSION['name'] ?></div>
        <h1>Registration Completed..! </h1>
        <h3>Thank You</h3>
        <a href="form.php" class ="link">Register for another user?</a>

    </div>

</body>
<?php include_once "footer.php" ?>

</html>
