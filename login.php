<?php
  include_once "db.php";

  if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_sql = "SELECT * FROM users WHERE email=$email && password=$password";
    $user_qs = mysqli_query( $conn, $user_sql );
    if( $user_qs ) {
      header( "location: index.php" );
    } else {
      echo "Email or Password Mismatched!";
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    
    <div class="login-page pt-5">
      <div class="container">
        <div class="row">
          <div class="col-6 offset-3">
            <form method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <button type="submit" name="login" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>