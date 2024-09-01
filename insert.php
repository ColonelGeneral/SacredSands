<?php

$name = $_POST['name'];
$email = $_POST['email'];       
$password = $_POST['password'];

// Database connection          
$conn = new mysqli('localhost','root','Div04pra05','sacredsands');

$sql_command = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password');";

if (mysqli_query($conn, $sql_command)) {
    header("Location: home_page.html");
    echo "New record created successfully";
} 