<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4 - Using Math Functions</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0);
            background-image: url('https://w.wallhaven.cc/full/ox/wallhaven-ox7zz7.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: 0 0 20px rgba(0,0,0,0.);
            border-radius: 10px;
        }

        h1 {
            color: #F8F8FF;
            text-align: center;
            margin-bottom: 20px;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0);
            border: 1px solid #61dafb;
            border-radius: 5px;
        }

        .result p {
            margin: 10px 0;
            padding: 10px;
            background: #000000;
            color: #F8F8FF;
            border-radius: 5px;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #61dafb;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Math Functions Demonstration</h1>
        <div class="result">
            <?php
            // Declare variables
            $floatNumbers = [2.5, 3.7, 1.1, 5.8, 7.9];
            $wholeNumbers = [2, 5, 7, 10, 4];

            // Perform basic math functions
            echo "<p>Number 1: $floatNumbers[0]</p>";
            echo "<p>Number 2: $floatNumbers[1]</p>";
            echo "<p>Number 3: $wholeNumbers[0]</p>";
            echo "<p>Number 4: $wholeNumbers[1]</p>";

            echo "<p>ceil(2.5) = " . ceil($floatNumbers[0]) . "</p>";
            echo "<p>floor(3.7) = " . floor($floatNumbers[1]) . "</p>";
            echo "<p>round(1.1) = " . round($floatNumbers[2]) . "</p>";
            echo "<p>abs(-5.8) = " . abs(-$floatNumbers[3]) . "</p>";
            echo "<p>sqrt(7.9) = " . sqrt($floatNumbers[4]) . "</p>";
            echo "<p>pow(2, 5) = " . pow($wholeNumbers[0], $wholeNumbers[1]) . "</p>";
            echo "<p>min(2, 5, 7, 10, 4) = " . min($wholeNumbers) . "</p>";
            echo "<p>max(2, 5, 7, 10, 4) = " . max($wholeNumbers) . "</p>";
            echo "<p>sin(2) = " . sin($wholeNumbers[0]) . "</p>";
            echo "<p>cos(5) = " . cos($wholeNumbers[1]) . "</p>";
            echo "<p>tan(7) = " . tan($wholeNumbers[2]) . "</p>";
            echo "<p>exp(10) = " . exp($wholeNumbers[3]) . "</p>";
            echo "<p>log(4) = " . log($wholeNumbers[4]) . "</p>";
            echo "<p>deg2rad(180) = " . deg2rad(180) . "</p>";
            echo "<p>rad2deg(pi()) = " . rad2deg(pi()) . "</p>";
            ?>
        </div>
        <a href="index.php">Back to Main Page</a>
        <div class="footer">
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </div>
    </div>
</body>
</html>
