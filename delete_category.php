<?php
include'includes/connection.php'; 


$query = "delete from category where cat_id = {$_GET['cat_id']}";
mysqli_query($conn, $query);

header("location:manage_category.php");
