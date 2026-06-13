<?php include("./includes/header.php") ?>
<h2 class=" mt-1">Student table</h2>
<a href="add.php" class=" btn btn-outline-danger m-3">Go To add page</a>
<div
    class="table-responsive-md"
>
    <table
        class="table table-danger"
    >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">course</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $students = $pdo->query(query:"select * from students");
            foreach($students as $student):
            ?>
            <tr>
                <td scope="col"><?= $student["id"] ?></td>
                <td scope="col"><?= $student["name"] ?></td>
                <td scope="col"><?= $student["email"] ?></td>
                <td scope="col"><?= $student["phone"] ?></td>
                <td scope="col"><?= $student["course"] ?></td>
                <td scope="col"><a href="delete.php?id=<?= $student["id"] ?>" class=" btn btn-outline-danger">Delete</a></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include("./includes/footer.php") ?>
