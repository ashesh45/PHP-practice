<!-- php code to set cookie value and retrieve value-->

<?php
$cookie_name ="user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '" . $cookie_name . "' is not set!";

}else{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<!--php code to Delete cookie -->

<?php
// set the expiration date to one hour ago
setcookie("user","",time() - 3600);
?>
<html>

<body>
<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>

