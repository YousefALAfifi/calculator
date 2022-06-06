<?php

    if(isset($_GET ['operation'])) {
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];

        switch ($op) {
            case '+' :
                $result = $x + $y;
                break;
            case '-' :
                $result = $x - $y;
                break;
            case 'X' :
                $result = $x * $y;
                break;
            case '/':
                $result = $x / $y;
                break;
        }

    }

?>
<!DOCTYPE html>
<html>
<head>
    <title> Calculator </title>
</head>
<body>
        <h1>Simple Calculator</h1><br>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get" >
<!--   Number 1-->
    <div>
        <label> First Number </label><br>
        <input type="number" required placeholder="First Number" name="num1" value="<?php echo $x ?>" >
    </div>
<!--    Number 2-->
    <div>
        <label> Second Number </label><br>
        <input type="number" required placeholder="Second Number" name="num2" value="<?php echo $y ?>" >
    </div>
<!--    Result-->
    <div>
        <label> Result </label><br>
        <input type="number" placeholder="Result" value="<?php echo $result ?>"  disabled>
        <br><br>
    </div>
<!--    operation-->
    <div>
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="X">
        <input type="submit" name="operation" value="/">
    </div>


    </form>

</body>
</html>