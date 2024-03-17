<?php
include ("conn.php");

if (isset($_POST['btn11'])) 
{
    $ptitle = $_POST['pname'];
    $pprice = $_POST['pprice'];
 
 //    $target_dir= "images/";
 
    $proimage=$_FILES["pimage"]["name"];
    $temptfile=$_FILES["pimage"]["tmp_name"];
 
     $location="image/";
     $saveimg =$location . $proimage;
 
     if (move_uploaded_file($temptfile,$saveimg)) {
         $sql = "UPDATE `product` SET `product_name`='$ptitle',`product_price`='$pprice',`product_image`='$proimage' WHERE id='".$_GET["id"]."'";
     }else{
        echo "Not working";
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
    
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light mt-5 rounded">
                <h2 class="text-center p-2">Update your Product</h2>


<?php
$takesql = "SELECT * FROM `product` WHERE id='".$_GET["id"]."'";

$updatesql = mysqli_query($con, $takesql);
    
    while ($hf = mysqli_fetch_array($updatesql)) 
    {
?>
                <form action="" method="post" class="p-2" id="form-box" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Model Name</label>
                        <input type="text" class="form-control" value="<?php echo $hf["product_name"]?>" name="pname" required>
                    </div>
                    <div class="form-group my-3">
                        <label>Model Price</label>
                        <input type="text" class="form-control" value="<?php echo $hf["product_price"]?>" name="pprice" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="formFile" class="form-label">Chose Product Image</label>
                        <input class="form-control" type="file" id="formFile" value="<?php echo $hf["product_image"]?>" name="pimage">
                        <center><img class="my-2 rounded-2" src="image/<?php echo $hf["product_image"] ?>" width="180px" height="130" alt=""></center>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-danger btn-block w-100" name="btn11" value="Update">
                    </div>

                </form>

<?php
    }
?>
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