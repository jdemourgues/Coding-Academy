<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<?php
if (empty($_POST['name']))
{
?>
    <form action="" method="POST">
    <p><label>Name :<input type="text" name="name" required/></label></p>
    <p><input type="submit"/></p>
</form>
<?php
}
else
echo "Hello ".$_POST['name']." \n";
?>
</body>
</html>