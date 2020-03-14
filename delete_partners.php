<?php
include'includes/connection.php'; 


$query = "delete from partners where par_id = {$_GET['par_id']}";
mysqli_query($conn, $query);

header("location:manage_partners.php");
