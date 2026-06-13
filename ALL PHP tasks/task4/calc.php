<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class=" bg-light ">
    <div class=" container mt-5">

        <h3 class=" text-start  bg-primary p-4 text-light "> Calculator</h3>

        <form method="post" action="" class=" card p-4 shadow">

            <div class=" mb-4">
                <label for="">First Number</label>
                <input type="number" name="num1" class=" form-control" required>
            </div>

            <div class=" mb-4">
                <label for="">Second number</label>
                <input type="number" name="num2" class=" form-control" required>
            </div>

            <div class=" mb-4">
                <label>Operation</label>

                <select name="operation" class=" form-select">

                    <option value="add">add</option>
                    <option value="substract">substract</option>
                    <option value="multiply">multiply</option>
                    <option value="divide">divide</option>

                </select>

            </div>

            <div class=" d-flex">
                <button type="reset" class=" btn btn-outline-danger  me-4">Reset</button>
                <button type="submit" class=" btn btn-outline-primary me-4">Calculate</button>
            </div>

        </form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    $result = 0;

    if($operation == "add"){
        $result = $num1 + $num2;
    }

    elseif($operation == "substract"){
        $result = $num1 - $num2;
    }

    elseif($operation == "multiply"){
        $result = $num1 * $num2;
    }

    elseif($operation == "divide"){

        if($num2 == 0){
            $result = "cannot divide by zero";
        }
        else{
            $result = $num1 / $num2;
        }

    }

    echo "<div class='alert alert-info text-center mt-5'>
        Result : <b>$result</b>
    </div>";
}

?>
    </div>

</body>

</html>