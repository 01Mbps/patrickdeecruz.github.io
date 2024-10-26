<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        h3 {
            color: #2980b9;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 5px;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            background-color: #ecf0f1;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        ul li:hover {
            background-color: #bdc3c7;
        }

        .results {
            font-weight: bold;
            color: #27ae60;
            background-color: #e9f7ef;
            padding: 10px;
            border-radius: 5px;
        }

        /* Button Style */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2980b9;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #3498db;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Selection Statements Task</h2>
    <?php
    // Initialize five string variables
    $strings = ["apple", "banana", "orange", "grape", "mango"];
    // Sorting strings manually in ascending order
    for ($i = 0; $i < count($strings) - 1; $i++) {
        for ($j = $i + 1; $j < count($strings); $j++) {
            if (strcmp($strings[$i], $strings[$j]) > 0) {
                // Swap strings
                $temp = $strings[$i];
                $strings[$i] = $strings[$j];
                $strings[$j] = $temp;
            }
        }
    }
    // Display strings in ascending order
    echo "<h3>Strings in Ascending Order:</h3>";
    echo "<ul>";
    foreach ($strings as $str) {
        echo "<li>$str</li>";
    }
    echo "</ul>";
    // Sorting strings manually in descending order
    for ($i = 0; $i < count($strings) - 1; $i++) {
        for ($j = $i + 1; $j < count($strings); $j++) {
            if (strcmp($strings[$i], $strings[$j]) < 0) {
                // Swap strings
                $temp = $strings[$i];
                $strings[$i] = $strings[$j];
                $strings[$j] = $temp;
            }
        }
    }
    // Display strings in descending order
    echo "<h3>Strings in Descending Order:</h3>";
    echo "<ul>";
    foreach ($strings as $str) {
        echo "<li>$str</li>";
    }
    echo "</ul>";
    // Initialize five integer variables
    $numbers = [10, 5, 7, 3, 2];
    // Check if the first number is divisible by the fifth
    if ($numbers[0] % $numbers[4] == 0) {
        // Calculate sum, product, and average
        $sum = array_sum($numbers);
        $product = 1;
        foreach ($numbers as $num) {
            $product *= $num;
        }
        $average = $sum / count($numbers);
        // Display results
        echo "<h3>Results:</h3>";
        echo "<div class='results'>Sum: $sum<br>";
        echo "Product: $product<br>";
        echo "Average: $average<br></div>";
    } else {
        // Sort numbers in ascending order manually
        for ($i = 0; $i < count($numbers) - 1; $i++) {
            for ($j = $i + 1; $j < count($numbers); $j++) {
                if ($numbers[$i] > $numbers[$j]) {
                    // Swap numbers
                    $temp = $numbers[$i];
                    $numbers[$i] = $numbers[$j];
                    $numbers[$j] = $temp;
                }
            }
        }
        // Display numbers in ascending order
        echo "<h3>Numbers in Ascending Order:</h3>";
        echo "<ul>";
        foreach ($numbers as $num) {
            echo "<li>$num</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="index.php" class="button">Back to Main Page</a>
    <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>
</div>
</body>
</html>
