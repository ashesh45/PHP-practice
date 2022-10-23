<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

Name: <input type="text" name="name"><br>
Email: <input type ="text" name="email"><br>

<input type="submit">
</form>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo"<table border=1 >
        <tr><td>NAME</td>
        <td>Email</td></tr>
        <td>$name</td>
        <td>$email</td>
        </table>";
        
    }

?>

</body>

</html>
