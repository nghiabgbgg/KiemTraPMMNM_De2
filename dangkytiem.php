<head>
  <title>Đăng ký tiêm chủng</title>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Date-Time-Picker-Bootstrap-4/build/css/bootstrap-datetimepicker.min.css">
</head>

<body>
  <div id="login">
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="xulydangkytiem.php" method="post">
              <h3 class="text-center text-info">Đăng ký tiêm chủng vắc xin covid 19</h3>
              <div class="form-group">
                <label for="injection_address" class="text-info">Nơi tiêm:</label><br>
                <input type="text" name="injection_address" id="injection_address" class="form-control">
              </div>
              <div class="form-group">
                <label for="priority" class="text-info">Đối tượng ưu tiên:</label><br>
                <select class="form-control" id="priority" name="priority">
                  <option value="bacsi">Bác sĩ</option>
                  <option value="congan">Công an</option>
                  <option value="canbo">Cán bộ</option>
                  <option value="nguoingheo">Người nghèo</option>
                  <option value="nguoilaodongtudo">Người lao động tự do</option>
                </select>
              </div>
              <div class="form-group">
                <label for="appointment_datetime" class="text-info">Thời gian:</label><br>
                <input type="text" name="appointment_datetime" class="form-control" id="datetimepicker1">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng ký tiêm">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Date-Time-Picker-Bootstrap-4/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
  $(function () {
    $('#datetimepicker1').datetimepicker({
      format: "DD/MM/YYYY hh:mm:ss"
    });
  });
</script>
</html>