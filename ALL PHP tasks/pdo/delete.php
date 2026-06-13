<?php include("./includes/header.php") ?>

<?php
$id = $_GET["id"];
$stmt = $pdo->prepare(query:"DELETE FROM `students` WHERE id=?");
$stmt->execute([$id]);
?>
<a href="index.php" class=" btn btn-outline-danger">back to student table page</a>

<?php include("./includes/footer.php") ?>
