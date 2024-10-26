<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NxN Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #98FB98;
            background-image: url('https://w.wallhaven.cc/full/7p/wallhaven-7pzwz9.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: rgba(0, 0, 0, 0);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #98FB98;
            color: white;
        }
        h2 {
            color: #98FB98;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>NxN Array Operations</h1>

    <?php
    // Set the value of N (size of the array)
    $N = 3;
    
    // Generate an NxN array with random integers
    $array = [];
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $array[$i][$j] = rand(1, 100); // Random integers between 1 and 100
        }
    }

    // Display the generated array
    echo "<h2>Generated NxN Array</h2>";
    echo "<table>";
    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Initialize variables for calculations
    $rowSums = $colSums = array_fill(0, $N, 0);
    $rowAvgs = $colAvgs = array_fill(0, $N, 0);
    $rowMins = $colMins = array_fill(0, $N, PHP_INT_MAX);
    $rowMaxs = $colMaxs = array_fill(0, $N, PHP_INT_MIN);
    $diag1Sum = $diag2Sum = 0;
    $diag1Count = $diag2Count = 0;
    $overallSum = 0;
    $overallMin = PHP_INT_MAX;
    $overallMax = PHP_INT_MIN;

    // Process each row and column
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $value = $array[$i][$j];
            
            // Update row and column sums, min, max
            $rowSums[$i] += $value;
            $colSums[$j] += $value;
            $rowMins[$i] = min($rowMins[$i], $value);
            $rowMaxs[$i] = max($rowMaxs[$i], $value);
            $colMins[$j] = min($colMins[$j], $value);
            $colMaxs[$j] = max($colMaxs[$j], $value);

            // Update overall min and max
            $overallMin = min($overallMin, $value);
            $overallMax = max($overallMax, $value);

            // Update diagonal sums
            if ($i == $j) {
                $diag1Sum += $value;
                $diag1Count++;
            }
            if ($i + $j == $N - 1) {
                $diag2Sum += $value;
                $diag2Count++;
            }

            // Update overall sum
            $overallSum += $value;
        }
    }

    // Calculate row and column averages
    for ($i = 0; $i < $N; $i++) {
        $rowAvgs[$i] = $rowSums[$i] / $N;
        $colAvgs[$i] = $colSums[$i] / $N;
    }

    // Calculate overall statistics
    $overallAvg = $overallSum / ($N * $N);
    $diag1Avg = $diag1Sum / $diag1Count;
    $diag2Avg = $diag2Sum / $diag2Count;

    // Display results
    echo "<h2>Results</h2>";

    // Display row and column sums and averages
    echo "<h3>Row and Column Sums and Averages</h3>";
    echo "<table><tr><th>Row/Column</th><th>Sum</th><th>Average</th><th>Min</th><th>Max</th></tr>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr><td>Row " . ($i + 1) . "</td><td>{$rowSums[$i]}</td><td>{$rowAvgs[$i]}</td><td>{$rowMins[$i]}</td><td>{$rowMaxs[$i]}</td></tr>";
        echo "<tr><td>Column " . ($i + 1) . "</td><td>{$colSums[$i]}</td><td>{$colAvgs[$i]}</td><td>{$colMins[$i]}</td><td>{$colMaxs[$i]}</td></tr>";
    }
    echo "</table>";

    // Display diagonal sums and averages
    echo "<h3>Diagonal Sums and Averages</h3>";
    echo "<p>Diagonal 1 (\\): Sum = $diag1Sum, Average = $diag1Avg</p>";
    echo "<p>Diagonal 2 (/): Sum = $diag2Sum, Average = $diag2Avg</p>";

    // Display overall sum, average, min, and max
    echo "<h3>Overall Statistics</h3>";
    echo "<p>Overall Sum = $overallSum</p>";
    echo "<p>Overall Average = $overallAvg</p>";
    echo "<p>Overall Min = $overallMin</p>";
    echo "<p>Overall Max = $overallMax</p>";
    ?>

</div>

</body>
</html>
