<html>

<head>
  <title>Trang đăng nhập</title>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
  <div id="login">
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="xulydangnhap.php" method="post">
              <h3 class="text-center text-info">Đăng nhập</h3>
              <div class="form-group">
                <label for="username" class="text-info">Tên tài khoản:</label><br>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="text-info">Mật khẩu:</label><br>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng nhập">
              </div>
              <div id="register-link" class="text-right">
                <a href="register.php" class="text-info">Đăng ký</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>