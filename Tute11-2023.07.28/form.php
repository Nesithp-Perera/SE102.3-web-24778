<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $conn = mysqli_connect("localhost", "root", "", "university");

    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }


    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("INSERT INTO tb1 (id, name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $id, $name, $email, $password);

        if ($stmt->execute()) {
            echo "Data added: " . $id;
        } else {
            echo "Error: " . $stmt->error;
        }


        $stmt->close();
        $conn->close();
    }
?>
