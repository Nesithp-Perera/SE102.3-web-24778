<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $gender = $_POST["gender"];
    $academic_year = $_POST["academic_year"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

   
    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname . "<br>";
    echo "User Name: " . $uname . "<br>";
    echo "Password: " . $pass . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Academic Year: " . $academic_year . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone Number: " . $phone . "<br>";
}
else{
    echo "error";
}
?>
