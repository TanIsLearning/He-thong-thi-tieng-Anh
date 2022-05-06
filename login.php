<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/login-signup.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/new-lgoteam.png">
    <script src="./source/javascript/cookieHandler.js"></script>
    <script>
        function showPassword() {
            let input = document.querySelector(".input-field>.password");
            let eyeIcon = document.querySelector(".input-field>.password-check");
            if (input.type === "password") {
                input.type = "text";
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                input.type = "password";
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }

        function setValueFromCookie(element) {
            if (element.type == 'password') {
                element.value = getCookie('password');
            } else {
                element.value = getCookie('username');
            }
        }

        function errorHandling() {
            if (typeof error !== 'undefined')
                document.querySelector('.error-message').style.display = 'block';
            else
                document.querySelector('.error-message').style.display = 'none';
        }
    </script>
</head>

<body onload="errorHandling(); setValueFromCookie(document.querySelector('#username')); setValueFromCookie(document.querySelector('#password'))">
    <div class="form-container">
        <div class="form">
            <span class="title">Đăng nhập</span>
            <div class="error-message">
                <p>Tên đăng nhập hoặc mật khẩu không chính xác. Vui lòng thử lại!</p>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="tenDangNhap" id="username" placeholder="Tên đăng nhập" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" name="matKhau" id="password" class="password" placeholder="Mật khẩu" required>
                    <i class="fa-solid fa-eye-slash password-check" onclick="showPassword()"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="remember-password" name="nhoMatKhau">
                        <label for="remember-password" class="text">Nhớ mật khẩu</label>
                    </div>
                    <a href="#" class="text">Quên mật khẩu ?</a>
                </div>

                <input class="btn btn-filled" type="submit" value="Đăng nhập">
            </form>

            <div class="login-signup">
                <span class="text"> Chưa có tài khoản?
                    <a href="signup.html" class="text signup-text">Đăng kí ngay</a>
                </span>
            </div>

        </div>
    </div>
</body>

</html>
<div style="display: none;">
    <?php
    require 'login-validate.php';
    ?>
</div>