<?php

$log = [];
$result = null;

function addLog(&$log, $msg){
    $log[] = "[" . date("H:i:s") . "] " . $msg;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $op = $_POST["operation"];

    addLog($log, "INPUT RECEIVED 💖");

    if($op == "add"){
        $result = $a + $b;
        addLog($log, "ADD OPERATION 💕");
    }
    elseif($op == "sub"){
        $result = $a - $b;
        addLog($log, "SUBTRACT OPERATION 🌸");
    }
    elseif($op == "mul"){
        $result = $a * $b;
        addLog($log, "MULTIPLY OPERATION ✨");
    }
    elseif($op == "div"){
        addLog($log, "DIVIDE OPERATION 💫");

        if($b == 0){
            $result = "Can't divide by zero 😭";
            addLog($log, "ERROR 💔");
        } else {
            $result = $a / $b;
        }
    }

    addLog($log, "DONE 💗");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Pink Calculator</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    font-family: 'Segoe UI', sans-serif;
}

/* soft glass card */
.panel{
    background: rgba(255,255,255,0.3);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* inputs */
input, select{
    border-radius: 12px !important;
    border: none !important;
    padding: 10px !important;
}

/* button */
.btn-love{
    background: #ff4d6d;
    color: white;
    border-radius: 12px;
    transition: 0.3s;
}

.btn-love:hover{
    background: #ff1e4d;
    transform: scale(1.05);
}

/* result */
.result{
    margin-top: 20px;
    background: white;
    padding: 15px;
    border-radius: 15px;
    text-align: center;
    font-size: 20px;
}

/* log */
.log{
    margin-top: 15px;
    background: rgba(255,255,255,0.6);
    padding: 10px;
    border-radius: 10px;
    font-size: 12px;
}

</style>

</head>

<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">💖 Cute Calculator 💖</h1>

    <div class="panel">

        <form method="post">

            <input type="number" name="num1" class="form-control mb-3" placeholder="First number 💕" required>

            <input type="number" name="num2" class="form-control mb-3" placeholder="Second number 💖" required>

            <select name="operation" class="form-control mb-3">
                <option value="add">Add 💕</option>
                <option value="sub">Subtract 🌸</option>
                <option value="mul">Multiply ✨</option>
                <option value="div">Divide 💫</option>
            </select>

            <button class="btn btn-love w-100">Calculate 💖</button>

        </form>

        <?php if($result !== null): ?>

            <div class="result">
                Result: <b><?= $result ?></b>
            </div>

            <div class="log">
                <b>Logs 💕</b><br><br>

                <?php foreach($log as $l): ?>
                    <?= $l . "<br>" ?>
                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</div>

</body>
</html>