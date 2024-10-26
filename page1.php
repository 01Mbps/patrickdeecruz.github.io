<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1 - Curriculum Vitae</title>
    <style>
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #cc3333;
            background-image: url('https://w.wallhaven.cc/full/g8/wallhaven-g89dgl.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 60%;
            margin: 40px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: 0 0 20px rgba(0,0,0,0);
            border-radius: 10px;
        }

        h1, h2 {
            color: #000000;
        }

        p, li {
            font-size: 1.1em;
            line-height: 1.6;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #000000;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #ff6600;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            font-size: 0.9em;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>
        <p><strong>Name:</strong> Jhon Patrick A. Dela Cruz</p>
        <p><strong>Course:</strong> BSIS</p>
        <p><strong>Year and Section:</strong> 3A</p>

        <h2>Education</h2>
        <ul>
            <li><strong>BS in Information Systems</strong>, Cebu Technological University, 2024- Present</li>
            <li><strong>High School Diploma</strong>, Babag National HighSchool, 2016 - 2021</li>
        </ul>

        <h2>Work Experience</h2>
        <ul>
            <li><strong>Intern</strong>, Philippine Stattistics Authority, July 2024 - September 2024
                <p>Enumerator</p>
            </li>
            
        </ul>

        <h2>Skills</h2>
        <ul>
            <li>Basic Adobe PhotoShop</li>
            <li>Video Editing</li>
        

        <h2>Certifications</h2>
        <ul>
            <li>Certified Web Developer, ABC Institute, 2022</li>
            <li>Introduction to Data Science, Coursera, 2023</li>
        </ul>

        <h2>Achievements</h2>
        <ul>
            <li>Dean's List, University of Cebu, 2022</li>
            <li>First Place, Regional Coding Competition, 2021</li>
        </ul>

        <h2>References</h2>
        <p>Available upon request</p>

       <a href="index.php">Back to Main Page</a>

       <footer>
            <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
        </footer>
    </div>
</body>
</html>
