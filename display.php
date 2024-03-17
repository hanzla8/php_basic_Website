<!doctype html>
<html lang="en">

<head>
  <title>DISPLAY DATA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark px-4">
    <a class="navbar-brand text-light" href="#">Hanz_86</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
            <a class="nav-link text-light" href="Add_product.php">Add Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="product_display.php">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="display.php">Display list</a>
        </li>
        </ul>

        <ul class="d-flex">
            <li class="me-2">
                <a class="btn btn-success" href="index.php">Login</a>
            </li>
            <li class="">
                <a class="btn btn-danger" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>



        <div class="table-responsive-lg my-3">
            <table class="table table-striped table-hover table-borderless table-primary align-middle">
                <h3 class="bg-dark">
                    <marquee class="text-light">MySQL Deta Read</marquee>
                </h3>
                <thead class="table-light">
                    <tr>
                        <th>Jugard ID</th>
                        <th>Detabase ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>PROFESSION</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>

                    </tr>
                </thead>



<?php

include ("conn.php");
    $selectsql = "SELECT * FROM `info`";

    $selectquery = mysqli_query ($con, $selectsql);

    $hff = 1;
    while ($f = mysqli_fetch_array($selectquery)) {
        
    

?>


                <tbody class="table-group-divider">
                    <tr class="table-primary">
        <td>
            <?php echo $hff;?>
        </td>
                        <td>
                            <?php echo $f["id"];?>
                        </td>
                        <td>
                            <?php echo $f["name"];?>
                        </td>
                        <td>
                            <?php echo $f["email"];?>
                        </td>
                        <td>
                            <?php echo $f["password"];?>
                        </td>
                        <td>
                            <?php echo $f["profession"];?>
                        </td>
                        <td><a href="upd.php?id=<?php echo $f["id"];?>" class="btn btn-success">Update</a></td>
                        <td><a href="del.php?id=<?php echo $f["id"];?>" class="btn btn-danger">Danger</a></td>
                    </tr>

                </tbody>
<?php
            $hff++;
    }
?>
                <tfoot>

                </tfoot>
            </table>
        </div>
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