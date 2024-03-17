<?php
include ("conn.php");

$delete = "DELETE FROM `info` WHERE id='".$_GET["id"]."'";

$sqldelete = mysqli_query($con, $delete);

if ($sqldelete) {
    header ("location:display.php");
}else{
    echo "Abey Jaa Tere Bass Ka nahi";
}




?>