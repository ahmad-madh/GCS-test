<?php
include'includes/connection.php'; 


$query = "delete from product where pro_id = {$_GET['pro_id']}";
mysqli_query($conn, $query);

header("location:manage_product.php");
