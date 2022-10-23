<?php
$servername="localhost";
$username="root";
$password="";


$con=mysqli_connect("$servername","$username","$password");

if($con)
{
    echo"connection successful";
    //Create  database
    $sql = "CREATE DATABASE bcatu";
    $res=mysqli_query($con,$sql);
    if ($res){
        echo "Database created successfully";
}else{
    echo "Error creating database: " . mysqli_error($con);
}
}
else
{
    echo"connection unsuccessful";
    die("Connection failed:" .mysqli_connect_error());
}