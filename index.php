<?php
include ('Database.php');
Database::connection();
$query = "SELECT * FROM `students`";
$students = Database::read($query);

//build insert query
//$query = "INSERT INTO `students` (`name`, `email`, `course`) VALUES ('rajib', 'rajib@gmail.com', 'JS');";
//Database::insert($query);


?>
<html>
    <body>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Courses</th>
                <th>Delete</th>
            </thead>
            <tbody>
            <?php
                foreach ($students as $student) {
                    ?>

                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['email'] ?></td>
                        <td><?= $student['course'] ?></td>
                        <td><a href="delete.php?id=<?=$student['id'];?>">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>

            </tbody>
        </table>
    </body>
</html>










