<?php
    $conn = mysqli_connect("localhost","root", "", "university");

    if(!$conn){
        die("error");
    }

    $sql = "select * from tb1";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){
            echo "ID: " . $row["id"] . "- Name: " . $row["name"] . "- Email" . $row["email"] .  "- Password" . $row["password"] ;
        }
    }
    else{
        echo "no data";
    }
?>