<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="">
        <label for="a">Number 1:</label>
        <input type="number" id="a" name="a" required><br><br>
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select><br><br>
        <label for="b">Number 2:</label>
        <input type="number" id="b" name="b" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    function calculate($a, $operation, $b) {
        switch ($operation) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Error: Division by zero";
                }
            case '%':
                if ($b != 0) {
                    return $a % $b;
                } else {
                    return "Error: Modulo by zero";
                }
            default:
                return "Error: Invalid operation";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $operation = $_POST['operation'];
        $b = $_POST['b'];

        $result = calculate($a, $operation, $b);
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>