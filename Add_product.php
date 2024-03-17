    <?php
include ("conn.php");

$msg = "";
if (isset($_POST['btn'])) 
{
   $ptitle = $_POST['pname'];
   $pprice = $_POST['pprice'];

//    $target_dir= "images/";

   $proimage=$_FILES["pimage"]["name"];
   $temptfile=$_FILES["pimage"]["tmp_name"];

    $location="image/";
    $saveimg =$location.$proimage;

    if (move_uploaded_file($temptfile,$saveimg)) {
        $sql = "INSERT INTO `product`(`product_name`, `product_price`, `product_image`) VALUES ('$ptitle','$pprice','$proimage')";


        if (mysqli_query($con, $sql)) 
        {
                $msg = "Product to the detabase";
        }else{
            $msg = "Failed To detabase";
        }
    }

    // ye kaam dosre trah ka hai, mgar is kaam main images file main mojood hona lazmi hai, os oper wale main tum images kahi se bhi call krwa sakte ho 
    
//    $target_file = $target_dir.basename($_FILES['pimage']["name"]);
//    move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file);

//    $sql = "INSERT INTO `product`(`product_name`, `product_price`, `product_image`) VALUES ('$ptitle','$pprice','$target_file')";


//    if (mysqli_query($con, $sql)) 
//    {
//         $msg = "Product to the detabase";
//    }else{
//     $msg = "Failed To detabase";
//    }
}

?>




<!doctype html>
<html lang="en">

<head>
  <title></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light mt-5 rounded">
                <h2 class="text-center p-2">Add Product Information</h2>

                <form action="" method="post" class="p-2" id="form-box" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Model Name</label>
                        <input type="text" class="form-control" name="pname" required>
                    </div>
                    <div class="form-group my-3">
                        <label>Model Price</label>
                        <input type="text" class="form-control" name="pprice" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="formFile" class="form-label">Chose Product Image</label>
                        <input class="form-control" type="file" id="formFile" name="pimage">
                      </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-danger btn-block w-100" name="btn" value="Add">
                    </div>


                    <div class="form-group">
                        <h4 class="text-center"><?php echo $msg; ?></h4>
                    </div>


                </form>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 bg-light rounded p-4">
                <a href="product_display.php" class="btn btn-warning btn-block btn-lg w-100"> Go to Product page</a>

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