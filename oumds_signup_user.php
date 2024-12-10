<?php
include('oumds_connect.php');
$user_name=$_POST['user-name'];
$user_mail=$_POST['user-mail'];
$user_password=$_POST['user-password'];
$user_age=$_POST['user-age'];
$user_gender=$_POST['user-gender'];
$user_number=$_POST['user-number'];
$user_blood=$_POST['user-blood'];
$user_address=$_POST['user-address'];
$sql="INSERT INTO user values('','$user_name','$user_mail','$user_password','$user_age','$user_gender','$user_number','$user_blood','$user_address')";

if(mysqli_query($connect,$sql))
{
    echo '<script>alert("Data Added Successfully");window.location="login.html"</script>';
}
else
{
    echo '<script>alert("Something went wrong!");window.history.go(-1);</script>';
}
?>