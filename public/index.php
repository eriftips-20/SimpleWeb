<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$calculator = new Calculator();
$result = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                $result = $calculator->add($num1, $num2);
                break;
            case 'subtract':
                $result = $calculator->subtract($num1, $num2);
                break;
            case 'multiply':
                $result = $calculator->multiply($num1, $num2);
                break;
            case 'divide':
                $result = $calculator->divide($num1, $num2);
                break;
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; }
        input, select, button { display: block; width: 100%; padding: 10px; margin: 10px 0; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .result { background: #f0f0f0; padding: 10px; margin-top: 20px; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form method="POST">
        <input type="number" name="num1" step="any" placeholder="First number" required>
        <input type="number" name="num2" step="any" placeholder="Second number" required>
        <select name="operation">
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (÷)</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php if ($result !== null): ?>
        <div class="result">Result: <?= htmlspecialchars($result) ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="error">Error: <?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
</body>
</html>
