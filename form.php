<?php
    session_start();
?>
<?php include_once "header.php"?>



    <div class="mainForm">
    <div class="regcontainer">
        <div class="title">Registration</div>
        <form action="server.php" method="POST">
            <div class="userdetail">
                
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter Fullname" name="name" required>
                </div>

                <div class="input-box">
                    <span class="details">Roll number</span>
                    <input type="text" placeholder="Enter College Reg No" name="rno" required>
                </div>

                <div class="input-box">
                    <span class="details">Age</span>
                    <input type="number" placeholder="Enter your Age" min="1" max="110" name="age" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter email adress" name="email" required>
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="text" placeholder="Enter your phone number" name="pnumber" required>
                </div>
                <div class="input-box">
                    <span class="details">College</span>
                    <input type="text" placeholder="Enter College name" name="college" required>
                </div>
                <div class="input-box">
                    <span class="details">State</span>
                    <input type="text" placeholder="Enter state name" name="state" required>
                </div>
                <div class="input-box">
                    <span class="details">District</span>
                    <input type="text" placeholder="Enter district name" name="district" required>
                </div>
                <div class="register">
                    <input type="submit" name="submit" value="SUBMIT" class = "btn">
                </div>
            </div>
        </form>
    </div>
    </div>
</body>
<script src='script.js'></script>
<?php include_once "footer.php" ?>
</html>

