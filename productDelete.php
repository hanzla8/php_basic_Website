<?php
include ("conn.php");

$delete = "DELETE FROM `product` WHERE id='".$_GET["id"]."'";

$sqldelete = mysqli_query($con, $delete);

if ($sqldelete) {
    header ("location:product_display.php");
}else{
    echo "Abey Jaa Tere Bass Ka nahi";
}




?>