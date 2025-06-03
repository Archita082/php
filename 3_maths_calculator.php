<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #ffffff;
        padding: 30px 40px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        width: 350px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #444;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    table {
        width: 100%;
        margin-bottom: 20px;
    }

    table td {
        padding: 5px 0;
    }

    input[type="radio"] {
        margin-right: 8px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #28a745;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }
</style>
   
</head>
<body>
    <div class="container">
        <h2>Maths Calculator</h2>
        <form action="submit/math_calculator.php" method="post">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required><br>

            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required>

            <table>
                <tr>
                    <td><b>Select Operation</b></td>
                </tr>
                <tr>
                    <td width="50%">
                        <label>
                            <input type="radio" id="add" name="operation" value="1" required>
                            Addition
                        </label>
                    </td>
                    <td width="50%">
                        <label>
                            <input type="radio" id="subtract" name="operation" value="2" required>
                            Subtraction
                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        <label>
                            <input type="radio" id="multiply" name="operation" value="3" required>
                            Multiplication
                        </label>
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        <label>
                            <input type="radio" id="divide" name="operation" value="4" required>
                            Division
                        </label>
                    </td>
                </tr>
            </table>
            <input type="submit" value="calculate">
            <?php
              if(isset($_REQUEST['msg'])==true)
                echo $_REQUEST['msg'];
             ?>
        </form>
</body>
</html>
