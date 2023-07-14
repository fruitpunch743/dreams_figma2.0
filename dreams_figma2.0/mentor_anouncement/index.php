<?php
include "./config.php";

    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $deadline = $_POST['deadline'];
        $description = $_POST['description'];
        $selectedyear= $_POST['Yearlist'];
    }


    $sql = "INSERT INTO announcement (title,Yearlist, deadline, description) VALUES ('$title','$selectedyear', '$deadline', '$description')";
  
    $rs = mysqli_query($conn, $sql);
    header("Location: ./index.html");

    mysqli_close($conn);
?>//