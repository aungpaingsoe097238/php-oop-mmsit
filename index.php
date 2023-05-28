<?php
system('clear');

require_once "./autoload.php";

// $fruit = new Fruit();
// echo $fruit->detail();
// print_r(Fruit::$x);
// print_r(Fruit::$y);
// print_r(Fruit::z());

// $student1 = new Student("Aung","male","2000");
// $student2 = new Student("Paing","male","1654");
// $student3 = new Student("Soe","female","5000");

// print_r($student1);
// print_r($student2);
// print_r($student3);

// echo $student1->showFullName();
// echo $student1->intro();

// Db
// $user = new Db("users");
// print_r($user->create([
//     'name' => 'naingnaing',
//     'email' => 'nn@gmail.com',
//     'gender' => 'female',
//     'address' => "Mandlay"
// ]));
// print_r($user->index());
// print_r($user->show(1));

//File Writer
// $html = new FileWriter("home.html");
// $html->write("<h1>Hello Home Page</h1>");

//Static Method 
// print_r(StaticMethod::$a);
// print_r(StaticMethod::b());
// print_r(StaticMethod::c());

//QueryBuilder
// $queryBuilder = new QueryBuilder("users");
// print($queryBuilder->where('gender','=','female')->sql());
// echo "\n";
// print($queryBuilder->orWhere('age',">",18)->orWhere('gender','=','female')->sql());
// echo "\n";
// print($queryBuilder->orderBy('id','DESC')->sql()); 

//Access modifier
$me = new Person();
// echo $me->talk();

//encapsulation 
$me->setFbPassword('new password');
var_dump($me->getFbPassword());

