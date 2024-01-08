<?php
if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    //VALIDATING INPUTS
    if (is_numeric($num1) && is_numeric($num2)) {
        //PERFORMING OPERATIONS
        switch ($operator) {
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
                $result = $num1 / $num2;
                break;
            default:
                $result = "You did not select an operator";
        }
    } else {
        $error = "Only numbers are allowed!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE CALCULATOR</title>
    <link rel="stylesheet" href="./Bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div id="container-fluid">
        <div class="flex-1" id="flex-1"></div>
        <div class="flex-2" id="flex-2">
            <p>ONLINE CALCULATOR</p>
            <form action="" method="GET" class="form">
                <div class="form-group">
                    <label for="num1" class="form-label">First Number:</label>
                    <input type="text" name="num1" class="form-control">
                    <p class="text-danger">
                        <?php if (isset($error)) {
                            echo $error;
                        } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="num2" class="form-label">Second Number:</label>
                    <input type="text" name="num2" class="form-control">
                    <p class="text-danger">
                        <?php if (isset($error)) {
                            echo $error;
                        } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="operator" class="form-label">Operators:</label>
                    <select name="operator" class="form-select">
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                        <option value="---" selected>---Select Operator---</option>
                    </select>
                </div>
                <center>
                    <input type="submit" name="submit" value="CALCULATE" class="btn btn-warning fw-bold">
                </center>
                <div>
                    <input type="text" class="form-control text-danger fw-bold text-center" value="
                    <?php if (isset($result)) {
                        echo $result;
                    } ?>
                    " disabled>
                </div>
            </form>
            <p class="text-center">&copy; 2023 Created by El-Nur</p>
        </div>
    </div>

    <script src="./Bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>