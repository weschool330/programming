<?php

$language = "English";

if (isset($_COOKIE["user_lang"])) {
    $language = $_COOKIE["user_lang"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST["language"];

    setcookie(
    "user_lang",
    $language,
    time() + (86400 * 360)
);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Language changer</title>
</head>

<body>
    <div class=" container mt-4">

        <div class=" card shadow">

            <h2 class=" m-4">Select Your language</h2>

            <form action="" method="post">

                <div class=" m-4">

                    <label for="" class=" m-2">Language selector</label>

                    <select name="language" class=" form-control m-4">

                        <option value="Arabic">Arabic</option>

                        <option value="English">English</option>

                        <option value="Frensh">Frensh</option>

                        <option value="Spanish">Spanish</option>

                    </select>

                </div>

                <button name="submit" class=" btn btn-outline-danger m-4 ">Save language</button>

            </form>
            <div class=" alert alert-danger m-4">
                Currnet Language : <b><?php echo $language ?></b>
            </div>
        </div>
    </div>
</body>

</html>