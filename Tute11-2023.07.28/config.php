<?php
    $conn = mysqli_connect("localhost","root", "", "university");

    if(!$conn){
        die("error");
    }
    else {
        echo "success";
    }
?>