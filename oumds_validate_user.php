<?php
include('oumds_connect.php');
print "hi";
$user_mail=$_POST['user-mail'];
$user_password=$_POST['user-password'];

$records = mysqli_query($db,"select * from user"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
    echo $user_mail==$data['user_mail'];
    if($user_mail==$data['user_mail'] and $user_password==$data['user_password'] )
    {
        echo '<script>window.location="user_home.php";</script>';
    }

}
echo '<script>alert("Incorrect username or password!");window.location="login.html";</script>';
?>