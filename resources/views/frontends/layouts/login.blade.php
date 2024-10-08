<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page HTML CSS | Codehal</title>
    <link rel="stylesheet" href="dangnhap\style.css">
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            @csrf

            <h2>Login</h2>
            <div class="input-group">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" placeholder="Tài khoản" required>
            </div>
            <div class="input-group">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" placeholder="Mật khẩu" required>
            </div>
            <div class="forgot-pass">
                <a href="#">Quên mật khẩu</a>
            </div>
            <button type="submit" class="btn">Đăng nhập</button>
            <div class="sign-link">
                <p>Bạn chưa có tài khoản? <a href="#" class="register-link">Đăng ký</a></p>
            </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
