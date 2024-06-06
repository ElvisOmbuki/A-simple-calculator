<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

<header>  
  <div class="bottom-section">
    
    <h1>Assignment1 simple calculator</h1>
      
      
  </div>
</header>

    <div class="calculator">
        <form method="post" action=" ">
        <input type="text" name="num1" placeholder="Enter first number">
            <input type="text" name="num2" placeholder="Enter second number (if required)">
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
                <option value="sqrt">√</option>
                <option value="log">log</option>
                <option value="percentage">%</option>
            </select>
            <button type="submit" name="submit">Calculate</button>
        </form>


        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $operation = $_POST['operation'];
            
            switch ($operation) {
                case "add":
                    $num2 = $_POST['num2'];
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $num2 = $_POST['num2'];
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $num2 = $_POST['num2'];
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    $num2 = $_POST['num2'];
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error! Division by zero.";
                    }
                    break;
                case "sqrt":
                    $result = sqrt($num1);
                    break;
                case "log":
                    $result = log($num1);
                    break;
                case "percentage":
                    $result = ($num1 / 100) * $_POST['num2'];
                    break;
                default:
                    $result = "Invalid operation";
            }
            echo "<h2>Result: $result</h2>";
        }
        ?>

    </div>
</body>
</html>
