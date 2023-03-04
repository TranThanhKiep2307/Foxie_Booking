<?php
$activate = "login";
@include('header.php')
?>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Đăng nhập</h2>
            <form action="#">
                <div class="input-box">
                    <span class= "icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" id="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class= "icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="password" id="password">
                    <label>Password</label>
                </div>
                <div class="remmember-forgot">
                    <label>
                        <input type="checkbox" name="checkbox" id="">
                    Remmember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="sumbit-login"></button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="register.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>



<?php
@include('footer.php')
?>






