<?php
include('oumds_connect.php');
$user_name=$_POST['User-Name'];
$user_no=$_POST['User-No'];
$med_brand=$_POST['Med-Brand'];
$med_gen=$_POST['Med-Gen'];
$med_type=$_POST['Med-Type'];
$med_qnt=$_POST['Med-Qnt'];
$user_addr=$_POST['User-addr'];
$sql="INSERT INTO medrequest values('$user_name','$user_no','$med_brand','$med_gen','$med_type','$med_qnt','$user_addr','')";

if(mysqli_query($connect,$sql))
{
    echo '<script>alert("Data Added Successfully");window.location="request_page.html";</script>';
}
else
{
    echo '<script>alert("Something went wrong!");window.history.go(-1);</script>';
}
?>