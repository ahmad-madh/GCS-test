<?php
include'includes/connection.php'; 


$query = "delete from jobs where job_id = {$_GET['job_id']}";
mysqli_query($conn, $query);

header("location:manage_jobs.php");
