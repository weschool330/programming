<?php include("./includes/header.php") ?>
<div class=" card p-3 mx-auto w-50">
    <div class=" card-header text-center text-light bg-primary">
        <h3>Add Student Now !</h3>
    </div>
    <div class=" card-body ">
        <form class="form-control" method="Post">
            <div class=" mb-3">
                <label for="name">Name</label>
                <input type="text" class=" form-control" name="name" required>
            </div>
            <div class=" mb-3">
                <label for="email">email</label>
                <input type="text" class=" form-control" name="email" required>
            </div>
            <div class=" mb-3">
                <label for="phone">phone</label>
                <input type="number" class=" form-control" name="phone" required>
            </div>
            <div class=" mb-3">
                <label for="course">course</label>
                <input type="text" class=" form-control" name="course" required>
            </div>
            <div class=" mb-3">
                <button type="submit" class=" btn btn-outline-success">Add new student</button>
                <a href="index.php" class=" btn btn-outline-danger ms-3 me-3">Back to student table page</a>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $course = $_POST["course"];
            $stmt = $pdo->prepare(query: "INSERT INTO `students`(`name`, `email`, `phone`, `course`)
             VALUES (?,?,?,?)");
            $stmt->execute([$name, $email, $phone, $course]);
        }
        ?>
    </div>
</div>
<?php include("./includes/footer.php") ?>