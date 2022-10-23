//php code to delete a record from database
<?php
$servername="localhost";
$username="root";
$password="";
$db="bcanepal";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn){
    $sql = "DELETE FROM myguests WHERE id=4";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo"record deleted successfully";
    }else{
        echo"Record not deleted";
    }

}else{
    echo"Error in data base connection";
}
?>

//php code to insert a record in a Database

<?php
$servername="localhost";
$username="root";
$password="";
$db="bcanepal";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn)
{
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES ('ashesh','maharjan','maharjan@gmail.com')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo"record inserted successfully";
    }else{
        echo"record not inserted";
    }
}else{
    echo"Error in database connection";
}

?>