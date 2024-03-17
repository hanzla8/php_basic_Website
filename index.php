<?php
  include ("conn.php");
    if(isset($_POST['btns'])) {
    $username = $_POST['emails'];
    $pass = $_POST['passwords'];

    $query = "SELECT * FROM info WHERE name='$username' && password='$pass'";
    $connect = mysqli_query($con, $query);

    $total = mysqli_num_rows($connect);
    if ($total == 1) {
      header("location:product_display.php");
    }else{
      echo '<script> alert("Sahi Password daal, Ya Phir Register kr pehle") </script>';
    }
    }


?>



<!doctype html>
<html lang="en">

<head>
  <title>Login Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

</head>

<body style="background: #f7f5eb;">


  <div class="container mt-5">

  <!-- <div class="row my-3">
        <div class="col-md-6">
            <a class="btn btn-info w-100" href="create.php">SignIn Page</a>
        </div>
        <div class="col-md-6">
            <a class="btn btn-success w-100" href="display.php">Login/Signin Information</a>
        </div>
    </div> -->

    <div class="row">
      <div class="col-6 mx-auto card py-5" style="background: #fffbe6; border-radius: 20px;">




        <form class="px-5" method="POST" autocomplete="off">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control" name="emails" />
            <label class="form-label" for="form2Example1">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="passwords" />
            <label class="form-label" for="form2Example2">Password</label>
          </div>

          

          <!-- Submit button -->
          <button type="submit" name="btns" class="btn btn-primary btn-block mb-4 px-5 mx-auto text-center">Sign in</button>




          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="register.php">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fa-brands fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fa-brands fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fa-brands fa-x-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fa-solid fa-heart-crack"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div><br>


















  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>