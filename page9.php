<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array Sorting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #000000;
            background-image: url('https://w.wallhaven.cc/full/9d/wallhaven-9d1o88.jpg');
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
            max-width: 600px;
            margin: auto;
            background: #666600;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #996633;
        }
        table {
            width: 100%;
            margin: 10px 0;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #5a67d8;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Unsorted and Sorted Lists of People</h1>

    <?php
    // Initial data in a single-dimensional parallel array structure
    $people = [
        ["name" => "Zara", "age" => 23, "sex" => "Female", "nationality" => "American"],
        ["name" => "Liam", "age" => 30, "sex" => "Male", "nationality" => "Canadian"],
        ["name" => "Ava", "age" => 28, "sex" => "Female", "nationality" => "British"],
        ["name" => "Noah", "age" => 22, "sex" => "Male", "nationality" => "Australian"],
        ["name" => "Olivia", "age" => 25, "sex" => "Female", "nationality" => "German"],
        ["name" => "Emma", "age" => 27, "sex" => "Female", "nationality" => "French"],
        ["name" => "Elijah", "age" => 29, "sex" => "Male", "nationality" => "American"],
        ["name" => "Sophia", "age" => 26, "sex" => "Female", "nationality" => "Spanish"],
        ["name" => "James", "age" => 32, "sex" => "Male", "nationality" => "Irish"],
        ["name" => "Mia", "age" => 24, "sex" => "Female", "nationality" => "Italian"]
    ];

    // Function to display the table of people
    function displayPeople($peopleArray, $title) {
        echo "<h2>$title</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
        foreach ($peopleArray as $person) {
            echo "<tr>
                    <td>{$person['name']}</td>
                    <td>{$person['age']}</td>
                    <td>{$person['sex']}</td>
                    <td>{$person['nationality']}</td>
                  </tr>";
        }
        echo "</table>";
    }

    // Display unsorted list
    displayPeople($people, "Unsorted List");

    // Sorting function using name as the key
    function sortPeopleByName(&$peopleArray) {
        usort($peopleArray, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
    }

    // Sort array and display sorted list
    sortPeopleByName($people);
    displayPeople($people, "Sorted List by Name (Ascending)");
    ?>
    <a href="index.php" class="button">Back to Main Page</a>
    <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>

</div>

</body>
</html>
