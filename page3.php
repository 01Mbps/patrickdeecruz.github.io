<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3 - Manipulating Numbers</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }

        .container {
            width: 70%;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            border-radius: 10px;
        }

        h1, h2 {
            color: #4CAF50;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="number"] {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e7f9e7;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
            color: #388E3C;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grade Calculator</h1>
        <form method="POST">
            <h2>Midterm Grades</h2>
            <label>Average Quizzes:</label>
            <input type="number" step="0.01" name="midterm_quizzes" required>
            <label>Average Projects:</label>
            <input type="number" step="0.01" name="midterm_projects" required>
            <label>Midterm Exam:</label>
            <input type="number" step="0.01" name="midterm_exam" required>

            <h2>Tentative Final Grades</h2>
            <label>Average Quizzes:</label>
            <input type="number" step="0.01" name="final_quizzes" required>
            <label>Average Projects:</label>
            <input type="number" step="0.01" name="final_projects" required>
            <label>Final Exam:</label>
            <input type="number" step="0.01" name="final_exam" required>

            <button type="submit">Calculate Grades</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Midterm Grades
            $midtermQuizzes = $_POST['midterm_quizzes'];
            $midtermProjects = $_POST['midterm_projects'];
            $midtermExam = $_POST['midterm_exam'];
            $midtermGrade = ($midtermQuizzes * 0.30) + ($midtermProjects * 0.20) + ($midtermExam * 0.50);

            // Tentative Final Grades
            $finalQuizzes = $_POST['final_quizzes'];
            $finalProjects = $_POST['final_projects'];
            $finalExam = $_POST['final_exam'];
            $tentativeFinalGrade = ($finalQuizzes * 0.30) + ($finalProjects * 0.20) + ($finalExam * 0.50);

            // Final Final Grade
            $finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

            echo "<div class='result'>";
            echo "<h2>Results</h2>";
            echo "<p>Midterm Grade: " . number_format($midtermGrade, 2) . "</p>";
            echo "<p>Tentative Final Grade: " . number_format($tentativeFinalGrade, 2) . "</p>";
            echo "<p>Final Final Grade: " . number_format($finalFinalGrade, 2) . "</p>";
            echo "</div>";
        }
        ?>
       <a href="index.php">Back to Main Page</a>
      
       <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>

    </div>
</body>
</html>
