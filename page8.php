<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Calculation</title>
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
            margin: auto;
            background: #c0c0c0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #000000;
        }
        label, input[type="number"], input[type="submit"] {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 1em;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f4f4f9;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Shopping Cart Calculation</h1>
    <p><strong>Problem:</strong> Calculate the total cost of items in a shopping cart including tax, with each item having a different price and quantity.</p>

    <form method="post">
        <label>Enter Price of Item 1:</label>
        <input type="number" name="price1" step="0.01" required>

        <label>Enter Quantity of Item 1:</label>
        <input type="number" name="quantity1" required>

        <label>Enter Price of Item 2:</label>
        <input type="number" name="price2" step="0.01" required>

        <label>Enter Quantity of Item 2:</label>
        <input type="number" name="quantity2" required>

        <input type="submit" value="Calculate Total">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // User Inputs
        $price1 = $_POST['price1'];
        $quantity1 = $_POST['quantity1'];
        $price2 = $_POST['price2'];
        $quantity2 = $_POST['quantity2'];

        // 1. Calculate cost of item 1
        function calculateItem1Cost($price, $quantity) {
            return $price * $quantity;
        }

        // 2. Calculate cost of item 2
        function calculateItem2Cost($price, $quantity) {
            return $price * $quantity;
        }

        // 3. Calculate subtotal
        function calculateSubtotal($item1Cost, $item2Cost) {
            return $item1Cost + $item2Cost;
        }

        // 4. Calculate tax on subtotal
        function calculateTax($subtotal, $taxRate = 0.07) {
            return $subtotal * $taxRate;
        }

        // 5. Calculate total including tax
        function calculateTotal($subtotal, $tax) {
            return $subtotal + $tax;
        }

        // 6. Display cost of item 1
        function displayItem1Cost($item1Cost) {
            echo "<p>Cost of Item 1: $" . number_format($item1Cost, 2) . "</p>";
        }

        // 7. Display cost of item 2
        function displayItem2Cost($item2Cost) {
            echo "<p>Cost of Item 2: $" . number_format($item2Cost, 2) . "</p>";
        }

        // 8. Display subtotal
        function displaySubtotal($subtotal) {
            echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
        }

        // 9. Display tax amount
        function displayTax($tax) {
            echo "<p>Tax (7%): $" . number_format($tax, 2) . "</p>";
        }

        // 10. Display total cost
        function displayTotal($total) {
            echo "<p>Total Cost: $" . number_format($total, 2) . "</p>";
        }

        // Calculations
        $item1Cost = calculateItem1Cost($price1, $quantity1);
        $item2Cost = calculateItem2Cost($price2, $quantity2);
        $subtotal = calculateSubtotal($item1Cost, $item2Cost);
        $tax = calculateTax($subtotal);
        $total = calculateTotal($subtotal, $tax);

        // Display Results
        echo "<div class='result'>";
        displayItem1Cost($item1Cost);
        displayItem2Cost($item2Cost);
        displaySubtotal($subtotal);
        displayTax($tax);
        displayTotal($total);
        echo "</div>";

        // Explanation of Functions
        echo "<h2>Explanation of Functions</h2>";
        echo "<ul>";
        echo "<li><strong>calculateItem1Cost</strong>: Multiplies item 1 price by quantity.</li>";
        echo "<li><strong>calculateItem2Cost</strong>: Multiplies item 2 price by quantity.</li>";
        echo "<li><strong>calculateSubtotal</strong>: Adds up the costs of items 1 and 2.</li>";
        echo "<li><strong>calculateTax</strong>: Calculates 7% tax on subtotal.</li>";
        echo "<li><strong>calculateTotal</strong>: Adds subtotal and tax for the final total.</li>";
        echo "<li><strong>displayItem1Cost</strong>: Displays cost for item 1.</li>";
        echo "<li><strong>displayItem2Cost</strong>: Displays cost for item 2.</li>";
        echo "<li><strong>displaySubtotal</strong>: Displays subtotal.</li>";
        echo "<li><strong>displayTax</strong>: Displays tax amount.</li>";
        echo "<li><strong>displayTotal</strong>: Displays final total cost.</li>";
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
