<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <h1>Day of the Week</h1>
    <form method="post">
        <label for="day_number">Enter a number (1 to 7):</label>
        <input type="number" id="day_number" name="day_number" min="1" max="7" required>
        <input type="submit" value="Show Day">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dayNumber = $_POST["day_number"];

    
        switch ($dayNumber) {
            case 1:
                $dayOfWeek = "Monday";
                break;
            case 2:
                $dayOfWeek = "Tuesday";
                break;
            case 3:
                $dayOfWeek = "Wednesday";
                break;
            case 4:
                $dayOfWeek = "Thursday";
                break;
            case 5:
                $dayOfWeek = "Friday";
                break;
            case 6:
                $dayOfWeek = "Saturday";
                break;
            case 7:
                $dayOfWeek = "Sunday";
                break;
            default:
                $dayOfWeek = "Invalid number";
                break;
        }

        echo "<h2>Day of the Week: " . $dayOfWeek . "</h2>";
    }
    ?>
</body>
</html>
