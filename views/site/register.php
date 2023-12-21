<!-- Register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập / Đăng ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../web/css/register">

</head>

<body>
    <?php include './navbar.php' ?>

    <div id="register" class="container">
        <div class="row">
            <!-- Login -->
            <div class="col-md-6">
                <h4>Đăng nhập</h4>
                <form action="" method="post" onsubmit="return validatePassword()">
                    <div class="form-group">
                        <label for="login-username">Tên tài khoản hoặc địa chỉ email *</label>
                        <input type="text" class="form-control" id="login-username" name="login-username" required>
                        <span id="username-message" style="color: red;"></span>
                    </div>

                    <div class="form-group">
                        <label for="login-password">Mật khẩu *</label>
                        <input type="password" class="form-control" id="login-password" name="login-password" required>
                        <span id="password-message" style="color: red;"></span>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember-me" name="remember-me">
                        <label class="form-check-label" for="remember-me">Ghi nhớ mật khẩu</label>
                    </div>

                    <button type="submit" class="btn">Đăng nhập</button>
                    <div class="mt-3">
                        <a href="reset_password.php">Quên mật khẩu?</a>
                    </div>
                </form>

            </div>

            <!-- Divider -->
            <div class="col-md-1 divider"></div>

            <!-- Register-->
            <div class="col-md-5">
                <h4>Đăng ký</h4>
                <form action="" method="post" onsubmit="return validateEmail()">
                    <div class="form-group">
                        <label for="register-email">Email *</label>
                        <input type="email" class="form-control" id="register-email" name="register-email" required>
                        <span id="email-message" style="color: red;"></span>
                    </div>

                    <h5>Một mật khẩu sẽ được gửi đến địa chỉ email của bạn</h5>
                    <p>Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này, để quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được mô tả trong chính sách riêng tư.</p>

                    <button type="submit" class="btn">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
    <script src="../../web/js/register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>