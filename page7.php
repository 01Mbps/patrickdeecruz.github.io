<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            background-image: url('https://w.wallhaven.cc/full/jx/wallhaven-jxgw9y.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            margin: 20px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

      
        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }

        form input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        form button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #45a049;
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th {
            background: linear-gradient(135deg, #4CAF50, #67dd8e);
            color: white;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            font-size: 14px;
            transition: background 0.3s;
        }

        td:hover {
            background-color: #f2f2f2;
        }

        
        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
        }

        h2 {
            font-size: 20px;
            color: #4CAF50;
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Loop Statements</h1>
    <form method="post">
        <label>Enter value for n:</label>
        <input type="number" name="n" required><br>
        <label>Enter value for m:</label>
        <input type="number" name="m" required><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);
        $m = intval($_POST["m"]);

        // Multiplication Table 
        echo "<h2>Multiplication Table for {$n} x {$m}</h2>";
        echo "<table>";
        for ($i = 1; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $m; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Fibonacci Series 
        function fibonacci($count) {
            $sequence = [0, 1];
            while (count($sequence) < $count) {
                $sequence[] = $sequence[count($sequence) - 1] + $sequence[count($sequence) - 2];
            }
            return array_slice($sequence, 0, $count);
        }

        echo "<h2>Fibonacci Series for n = {$n}</h2>";
        echo implode(", ", fibonacci($n));

        echo "<h2>Fibonacci Series for m = {$m}</h2>";
        echo implode(", ", fibonacci($m));

        // Factorial 
        $factorial = 1;
        $i = $n;
        do {
            $factorial *= $i;
            $i--;
        } while ($i > 0);

        echo "<h2>Factorial of n (n!) = {$factorial}</h2>";

        // Summation 
        $summation = 0;
        $j = $m;
        do {
            $summation += $j;
            $j--;
        } while ($j > 0);

        echo "<h2>Summation of m = {$summation}</h2>";
    }
    ?>
    <a href="index.php" class="button">Back to Main Page</a>
    <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>
</div>

</body>
</html>
