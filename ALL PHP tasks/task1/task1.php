<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class=" bg-light">
    <div class=" container mt-5">
        <h1 class=" text-center mt-5">Student Report Table</h1>
        <?php
        $students = [
            [
                "name" => "Youssif",
                "grade" => "A+",
                "subject" => "programming",
                "marks" => 100
            ]
            ,
            [
                "name" => "Ahmed",
                "grade" => "A",
                "subject" => "math",
                "marks" => 90
            ]
            ,
            [
                "name" => "ramiz",
                "grade" => "S",
                "subject" => "English",
                "marks" => 99
            ]
            ,
            [
                "name" => "Hamada",
                "grade" => "B+",
                "subject" => "Arabic",
                "marks" => 85
            ]
            ,
            [
                "name" => "Abdo",
                "grade" => "C",
                "subject" => "Physics",
                "marks" => 80
            ]
        ];
            ?>
        <table class=" table table-bordered table-striped table-hover">
            <thead class=" table-dark">
                <tr>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Subject</th>
                    <th>Mark</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($students as $student) {

                    echo "<tr>";
                    echo "<td>" . $student['name'] . "</td>";
                    echo "<td>" . $student['grade'] . "</td>";
                    echo "<td>" . $student['subject'] . "</td>";
                    echo "<td>" . $student['marks'] . "</td>";
                    echo "<tr>";

                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>