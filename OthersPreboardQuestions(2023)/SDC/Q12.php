<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <!-- Q12. Design a simple calculator with PHP. -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Enter first number:</label>
        <input type="number" name="num1" required><br><br>

        <label>Enter second number:</label>
        <input type="number" name="num2" required><br><br>

        <label>Select operation:</label>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>

        <input type="submit" value="Calculate"><br><br>
    </form>

    <?php
    if (
        isset($_POST, $_POST['num1'], $_POST['num2']) &&
        !empty($_POST['num1']) && !empty($_POST['num1'])
    ) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "<b>Note: Cannot divide by zero</b>";
                } else {
                    $result = $num1 / $num2;
                }
                break;
        }
        echo "<br><br>";
        echo "<b>Result: </b>" . $result;
    }
    ?>
</body>

</html>