<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method = "POST">
        <label for = "score">Score</label>
        <input type = text name = score placeholder = "Enter your score">
        <button type = "submit">submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = $_POST['score'];

            echo "<h4>Score: $score</h4>";

            if ($score >= 90) {
                echo "Grade: A";
            }
            elseif ($score >= 80) {
                echo "Grade: B";
            }
            elseif ($score >= 80) {
                echo "Grade: C";
            }
            elseif ($score >= 70) {
                echo "Grade: D";
            }
            else {
                echo "Grade: F";
            }
        }
    ?>
</body>
</html>