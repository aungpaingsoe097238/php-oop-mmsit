<?php 

$host = "localhost";
$username = "username";
$password = "password";
$database = "school";

try{
    $conn = new PDO(
        "mysql:host=$host;dbname=$database",
        $username,
        $password
    );
    print_r($conn);
}catch(PDOException $ex){
    print_r($e);
}

// $sql = "INSERT INTO money (name,money) VALUES ('pdo',500)";
// $conn->query($sql);

// $stml = $conn->prepare("INSERT INTO money (name,money) VALUES (:name,:money)");
// $stml->bindParam(":name",$name);
// $stml->bindParam(":money",$money);

// $name = "aps";
// $money = 400;

// $stml->execute();

// $sql = "SELECT * FROM money";
// $query = $conn->query($sql);
// $users = $query->fetchAll(PDO::FETCH_ASSOC);

// print_r($users);

// $sql = "SELECT * FROM money WHERE id = 2";
// $query = $conn->query($sql);
// $user = $query->fetch(PDO::FETCH_OBJ);
// print_r($user);

// $stml = $conn->prepare("UPDATE money SET name=:name,money=:money WHERE id = :id");
// $stml->bindParam(":name",$name);
// $stml->bindParam(":money",$money);
// $stml->bindParam(":id",$id);

// $name = "update";
// $money = 234;
// $id = 2;

// $stml->execute();

// $sql = "DELETE FROM money WHERE id = 2";
// $conn->query($sql);
// $stmt = $conn->prepare("DELETE FROM money WHERE id = :id");
// $stmt->bindParam(":id",$id);
// $id = 1;
// var_dump($stmt->execute());