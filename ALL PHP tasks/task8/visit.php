<?php

$massage = "";

if (isset($_COOKIE["visit_ors"])) {
    $visit = $_COOKIE["visit_ors"] + 1;
    $massage = "welcome back";
} else {
    $visit = 1;
    $massage = "hello new user";
}

setcookie(
    "visit_ors",
    $visit,
    time() + (86400 * 30)
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body class=" bg-light">
    <div class=" container mt-5">
        <div class=" alert alert-danger">
            <h2><?php echo $massage ?></h2>
            <hr>
            <h4>VISIT COUNT : <?php echo $visit ?></h4>
        </div>
    </div>
</body>

</html>