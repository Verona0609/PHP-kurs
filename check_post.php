<?php

//print_r($_POST);

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$message=$_POST['message'];

if(trim($name)=="")
    echo "Error: no user name";
else if(strlen(trim($name))<=1)
    echo 'Error: no length for username';
if(trim($email)==""|| trim($password)=="" || trim($message)=="" )
    echo "Error: not all data presents.";
else{
    $_POST['passwors']=md5($password);
    echo "<h1>All data</h1>$name";
    foreach($_POST as $key=> $value)
echo "<p>Key:$key, value:$value</p>";

    header('Location: index.php');//переадрисація користувача після успішної реєстрації.
    exit;
}