<?php
    include ("conn.php");
    // Create main sb page main database connection page ko include kiya jata hai, os main ye code lazmi hai,



    if(isset($_POST["btn"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $prof = $_POST["profession"];

        $insert = "INSERT INTO `info`(`name`,`email`,`password`,`profession`) VALUE ('$name','$email','$pass','$prof')";

        $conin = mysqli_query ($con,$insert);

        if ($conin) {
            header("location:index.php");
        }else{
            echo "Hoja na sahi charya";
        }
    }

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container p-5">

    <div class="row my-3">  
        <div class="col-md-6">
            <a class="btn btn-warning w-100" href="logout.php">Logout</a>
        </div>
        <!-- <div class="col-md-6">
            <a class="btn btn-warning w-100" href="create.php">SignIn Page</a>
        </div> -->
        <div class="col-md-6">
            <a class="btn btn-info w-100" href="display.php">Login/Signin Information</a>
        </div>
    </div>
        <h3>
            <marquee class="bg-success text-light">Please Put Your Orignal Email & Pass</marquee>
        </h3>
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="col-md-6">
                    <label>Profession</label>
                    <input type="text" class="form-control" name="profession">
                </div>

                <input class="btn btn-danger m-3" type="submit" name="btn" value="Register">
                <p>If you are a member? <a href="index.php">Login</a></p>

            </div>
        </form>

    </div>





    <!-- Now the turn of table and php crud read section -->
















    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>