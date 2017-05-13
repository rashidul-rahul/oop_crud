<?php
include ('Database.php');
Database::connection();

$query = "DELETE FROM `students` WHERE `students`.`id` = ".$_GET['id'];
Database::delete($query);
header("location: index.php");