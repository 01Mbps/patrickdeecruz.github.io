<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 - The Use of Variables</title>
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
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
            border-radius: 10px;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        h2 {
            color: #E0FFFF;
        }

        p {
            margin: 5px 0;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 5px;
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
        <h1>The Use of Variables</h1>
        <?php
        
        $wholeNumbers = [1, 2, 3, 4, 5];
        $floatingNumbers = [1.1, 2.2, 3.3, 4.4, 5.5];
        $strings = ["One", "Two", "Three", "Four", "Five"];
        $characters = ['A', 'B', 'C', 'D', 'E'];

       
        echo "<h2>Whole Numbers:</h2>";
        foreach ($wholeNumbers as $number) {
            echo "<p>Whole Number: $number</p>";
        }

        echo "<h2>Floating Point Numbers:</h2>";
        foreach ($floatingNumbers as $number) {
            echo "<p>Floating Number: $number</p>";
        }

        echo "<h2>Strings:</h2>";
        foreach ($strings as $string) {
            echo "<p>String: $string</p>";
        }

        echo "<h2>Characters:</h2>";
        foreach ($characters as $char) {
            echo "<p>Character: $char</p>";
        }
        ?>
        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>
    </div>
</body>
</html>
