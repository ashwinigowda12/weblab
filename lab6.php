<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        table, td, th {
            border: 1px solid black;
            width: 33%;
            text-align: center;
            background-color: DarkGray;
        }
        table {
            margin: auto;
            border-collapse: collapse;
        }
        input, p {
            text-align: right;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form method="post">
        <table>
            <caption><h2>SIMPLE CALCULATOR</h2></caption>
            <tr>
                <td>Value 1:</td>
                <td><input type="text" name="num1" required /></td>
                <td rowspan="2"><input type="submit" name="submit" value="Calculate"></td>
            </tr>
            <tr>
                <td>Value 2:</td>
                <td><input type="text" name="num2" required /></td>
            </tr>

            <?php
            if (isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                if (is_numeric($num1) && is_numeric($num2)) {
                    echo "<tr><td colspan='2'>Addition :</td><td><p>" . ($num1 + $num2) . "</p></td></tr>";
                    echo "<tr><td colspan='2'>Subtraction :</td><td><p>" . ($num1 - $num2) . "</p></td></tr>";
                    echo "<tr><td colspan='2'>Multiplication :</td><td><p>" . ($num1 * $num2) . "</p></td></tr>";
                    
                    if ($num2 != 0) {
                        echo "<tr><td colspan='2'>Division :</td><td><p>" . ($num1 / $num2) . "</p></td></tr>";
                    } else {
                        echo "<tr><td colspan='2'>Division :</td><td><p>Cannot divide by zero</p></td></tr>";
                    }
                } else {
                    echo "<script type='text/javascript'>alert('ENTER VALID NUMBERS');</script>";
                }
            }
            ?>
        </table>
    </form>
</body>
</html>
