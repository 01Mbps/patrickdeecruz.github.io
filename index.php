<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #cc3333;
            color: #cc3333;
            background-image: url('https://w.wallhaven.cc/full/4x/wallhaven-4x1jpd.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Container styling */
        .container {
            width: 80%;
            max-width: 700px;
            margin: 40px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0);
            text-align: center;
            border-radius: 10px;
        }

        /* Heading colors */
        h1 {
            color: #0099cc;
            font-size: 2.5em;
            margin-bottom: 0.3em;
        }

        h2 {
            color:#0099cc;
            font-size: 1.8em;
            margin-top: 1em;
        }

        /* Paragraph and list styling */
        p {
            margin: 10px 0;
            font-size: 1.1em;
            color: #DC143C;
        }

        ul {
            list-style-type: none;
            padding: 0;
            font-size: 1.1em;
        }

        /* Link styling */
        a {
            text-decoration: none;
            color: #ff9933;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #ff9933;
            color: #333;
        }

        /* Footer styling */
        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: #f5f5f5;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
            font-size: 0.9em;
            width: 100%;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Project</h1>
        <p><strong>Name:</strong> Jhon Patrick A. Dela Cruz</p>
        <p><strong>Course:</strong> BSIS</p>
        <p><strong>Year and Section:</strong> 3A</p>

        <h2>Pages</h2>
        <ul>
            <li><a href="page1.php">1. Curriculum Vitae</a></li>
            <li><a href="page2.php">2. The Use of Variables</a></li>
            <li><a href="page3.php">3. Manipulating Numbers</a></li>
            <li><a href="page4.php">4. Using Math Functions</a></li>
            <li><a href="page5.php">5. Using Constants</a></li>
            <li><a href="page6.php">6. Selection Statements</a></li>
            <li><a href="page7.php">7. Loop Statements</a></li>
            <li><a href="page8.php">8. User-defined Functions</a></li>
            <li><a href="page9.php">9. Single-dimensional Array</a></li>
            <li><a href="page10.php">10. Two-dimensional Array</a></li>
        </ul>
    </div>

    <footer>
        <p>Created by Patrick Dela Cruz | Date Created: <?php echo date("Y-m-d"); ?></p>
    </footer>
</body>
</html>
