<?php
include'includes/connection.php'; 


$query = "delete from news where news_id = {$_GET['news_id']}";
mysqli_query($conn, $query);

header("location:manage_news.php");
