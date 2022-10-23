<?php
if(isset($_POST["submit"]))
{
    //to store image and its name
    $file = $_FILES["file"]["name"];
    $temp_name = $_FILES["file"]["tmp_name"];

    //path to store image in a folder
    $path = "images/" . $file;

    //to move image to the folder
    move_uploaded_file($temp_name, $path);
}