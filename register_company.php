<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form method='post' action='register_company_ok.php'>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="cmpID" name = "cmpID" class="form-control" placeholder="cmpID" required="required" autofocus="autofocus">
                <label for="cmpID">Company ID</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="cmpName" name = "cmpName" class="form-control" placeholder="cmpName" required="required">
                <label for="cmpName">Company Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="mngEmail" name = "mngEmail" class="form-control" placeholder="mngEmail" required="required">
                <label for="mngEmail">Manager Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="cmpWant" name = "cmpWant" class="form-control" placeholder="cmpWant" required="required">
                <label for="cmpWant">Company Want</label>
              </div>
            </div>
            <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="minGrade" name = "minGrade" class="form-control" placeholder="minGrade" required="required">
                    <label for="minGrade">Min Grade</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name = "inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name = "confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>