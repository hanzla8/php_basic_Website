<!doctype html>
<html lang="en">

<head>
  <title>Product Page</title>
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
            <a class="nav-link text-light" href="#">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="display.php">Display list</a>
        </li>
        </ul>

        <ul class="d-flex text-decoration-none">
            <li class="me-2">
                <a class="btn btn-success" href="register.php">Register</a>
            </li>
            <li class="">
                <a class="btn btn-danger" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
    </nav>


<?php
    require 'conn.php';

    $sql = "SELECT * FROM product";

    $result = mysqli_query($con,$sql);
?>
    <div class="container">





    
    <!-- Input Form work here-->
<?php
    if (isset($_GET["searchbtn"])) {
        
    }


?>
        <form method="GET">
            <div class="input-group my-3">
                <input type="text" name="search" class="form-control" placeholder="Search Data">
            <div class="input-group-append">
                <button class="btn btn-info" name="searchbtn" type="button">Button</button>
            </div>
            </div>
        </form>

        <div class="row">
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            <div class="col-md-4 my-3">
                <div class="card-deck">
                    <div class="card border-info p-2">
                        <img src="image/<?php echo $row['product_image']; ?>" class="card-img-top" height="250px">
                        <h5 class="card-title">Product : <?php echo $row['product_name']; ?></h5>
                        <h4>Price : <?php echo $row['product_price']; ?></h4>
                        <a href="order.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-block btn-lg">Buy Now</a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>


    <!-- Now The Term Of Table Work -->

    <div class="container">
        <div class="row">
        <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Cars Deta Reupdate</caption>
                <tr>
                    <th>JUGARD ID</th>
                    <th>SQL ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>images</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>

<?php
    $deta = "SELECT * FROM `product`";

    $select = mysqli_query($con, $deta);

    $a = 1;
    while ($h=mysqli_fetch_array($select)) {
    
?>
                <tbody class="table-group-divider">
                    <tr class="table-primary" >
                        <td> <?php echo $a; ?></td>
                        <td><?php echo $h["id"];?></td>
                        <td><?php echo $h["product_name"];?></td>
                        <td><?php echo $h["product_price"];?></td>
                        <td><img class="mx-auto" width="170px" height="100px" src="image/<?php echo $h["product_image"];?>"></td>
                        <th>
                            <a href="productDUpdate.php?id=<?php echo $h["id"]?>" class="btn btn-success">update</a>
                        </th>
                        <th>
                            <a href="productDelete.php?id=<?php echo $h["id"]?>" class="btn btn-danger">delete<a>
                        </th>
                    </tr>
                    
                </tbody>
                
<?php
    $a++;
}
?>
        </table>
    </div>
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