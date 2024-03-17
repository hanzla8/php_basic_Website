  <?php
    include ("conn.php");

    if (isset($_POST["btn2"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $pass = $_POST["password"];
      $prof = $_POST["profession"];


      $update = "UPDATE `info` SET `name`='$name',`email`='$email',`password`='$pass',`profession`='$prof' WHERE id='".$_GET["id"]."'";

      // Updat + Query Code run
      $update_con = mysqli_query($con, $update);

      if ($update_con) {
        header ("location:display.php");
      }
    }


    $takesqlall = "SELECT * FROM `info` where id='".$_GET["id"]."'";

    $updatesql = mysqli_query($con, $takesqlall);

    


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
          <h3>
              <marquee class="bg-warning text-dark">Update Form</marquee>
          </h3>





  <!-- Now You Just Open your while Loop Here -->
  <?php
    while ($hf = mysqli_fetch_array($updatesql)) 
    {
    
  ?>
          <form method="POST">
              <div class="row">
                  <div class="col-md-6">
                      <label>Name</label>
                      <input type="text" class="form-control" value="<?php echo $hf["name"]?>" name="name">
                  </div>
                  <div class="col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" value="<?php echo $hf["email"]?>" name="email">
                  </div>
                  <div class="col-md-6">
                      <label>Password</label>
                      <input type="password" class="form-control" value="<?php echo $hf["password"]?>" name="password">
                  </div>
                  <div class="col-md-6">
                      <label>Profession</label>
                      <input type="text" class="form-control" value="<?php echo $hf["profession"]?>" name="profession">
                  </div>

                  <input class="btn btn-warning m-3" type="submit" name="btn2" value="Update">

              </div>
          </form>

  <?php
    }
  ?>

      </div>










    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>

  </html>