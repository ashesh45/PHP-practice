<html>
<head>
<style>
.error { color: #FF0000;}
</style>
<head></html>
<?php
$nameerror = $emailerror= $gendererror="";
$name = $email= $gender="";

if(isset($_POST['submit']))
{
    if(empty($_POST['name']))
    {
        $nameerror="Name is Required";
    }else{
        $name=$_POST['name'];
    }
    
    if(empty($_POST['email']))
    {
        $emailerror="Email is Required";
    }else{
        $email=$_POST['email'];
    }

    if(empty($_POST['gender']))
    {
        $gendererror="Value is Required";
    }else{
        $gender=$_POST['gender'];
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" methods="post">
Name:<input type="text" name="name">
<span class="error">*<?php echo $nameerror;?></span>
Email:<input type="email" name="email">
<span class="error">*<?php echo $emailerror; ?></span>
Gender:
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male
<span class="error">*<?php echo $gendererror;?>
<input type="submit" name="submit" values="submit">

<?php
echo $name;
echo $email;
?>

</form>

