<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Electricity Bill Calculator</h1>
    <form method="post">
        <label for="units">Enter Units :</label>
        <input type="number" id="units" name="units" required>
        <input type="submit" value="Calculate Bill">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $units = $_POST["units"];

        $r1 = 3.50;
        $r2 = 4.00;
        $r3 = 5.20;
        $r4 = 6.50;
        $totalBill = 0;

     
        if ($units <= 50) {
            $totalBill = $units * $r1;
        } elseif ($units <= 100) {
            $totalBill = 50 * $r1 + ($units - 50) * $r2;
        } elseif ($units <= 150) {
            $totalBill = 50 * $r1 + 50 * $r2 + ($units - 100) * $r3;
        } else {
            $totalBill = 50 * $r1 + 50 * $r2 + 50 * $r3 + ($units - 150) * $r4;
        }

        echo "<h2>Electricity Bill: Rs. " . number_format($totalBill, 2) . "</h2>";
    }
    ?>
</body>
</html>
