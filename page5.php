<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 5 - Using Constants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }

        .container {
            width: 70%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f5e9;
            border: 1px solid #4CAF50;
            border-radius: 5px;
        }

        .result p {
            margin: 8px 0;
            padding: 10px;
            background-color: #f1f8e9;
            border-left: 5px solid #4CAF50;
            border-radius: 3px;
        }

        .example {
            background-color: #ffeb3b;
            color: #333;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Using Constants</h1>
        <div class="result">
            <?php
            // Defining constants
            define("PI", 3.14159);
            define("EULER", 2.71828);
            define("GRAVITY", 9.81);
            define("SPEED_OF_LIGHT", 299792458);
            define("PLANCK", 6.62607015e-34);
            define("BOLTZMANN", 1.380649e-23);
            define("AVOGADRO", 6.02214076e23);
            define("GAS_CONSTANT", 8.314);
            define("EARTH_RADIUS", 6371000);
            define("ATMOSPHERIC_PRESSURE", 101325);

            // Displaying constants
            echo "<p>Value of PI: " . PI . "</p>";
            echo "<p>Value of Euler's Number: " . EULER . "</p>";
            echo "<p>Value of Gravity: " . GRAVITY . " m/s²</p>";
            echo "<p>Value of Speed of Light: " . SPEED_OF_LIGHT . " m/s</p>";
            echo "<p>Value of Planck's Constant: " . PLANCK . " Js</p>";
            echo "<p>Value of Boltzmann Constant: " . BOLTZMANN . " J/K</p>";
            echo "<p>Value of Avogadro's Number: " . AVOGADRO . "</p>";
            echo "<p>Value of Gas Constant: " . GAS_CONSTANT . " J/(mol K)</p>";
            echo "<p>Value of Earth's Radius: " . EARTH_RADIUS . " m</p>";
            echo "<p>Value of Atmospheric Pressure: " . ATMOSPHERIC_PRESSURE . " Pa</p>";

            // Examples of using constants
            echo "<h2>Examples of Using Constants:</h2>";
            echo "<p class='example'>Circumference of a Circle with radius 5: " . (2 * PI * 5) . "</p>";
            echo "<p class='example'>Energy of a photon with frequency 5e14 Hz: " . (PLANCK * 5e14) . " J</p>";
            ?>
        </div>
        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>
    </div>
</body>
</html>
