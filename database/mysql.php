<?php

$host = "localhost";
$username = "username";
$password = "password";
$database = "school";

$conn = new mysqli($host, $username, $password, $database);

// $sql = "INSERT INTO `students` (`id`, `name`, `date_of_birth`, `birth_year`, `gender`, `weight`, `money`, `is_active`, `nation`, `address`, `created_at`, `updated_at`) VALUES (NULL, 'APS', '2023-05-03', '25', 'male', '102', '100', '1', 'mm', 'address', '2023-05-29 12:34:15', '2023-05-29 12:34:15');";
// $conn->query($sql);

// $sql = "UPDATE `students` SET `name` = 'aps' WHERE `students`.`id` = 2;";
// $conn->query($sql);

// $sql = "SELECT * FROM students WHERE id=2";
// $query = $conn->query($sql);
// print_r($query->fetch_object());

// $sql = "DELETE FROM students WHERE id = 2";
// var_dump($conn->query($sql));

// $sql = "SELECT * FROM students LIMIT 3";
// $query = $conn->query($sql);
// while($row = $query->fetch_object()){
//     print_r($row);
// }

print_r($conn);