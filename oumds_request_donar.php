<?php
include('oumds_connect.php');
$data1=$_GET['dataid']; 
print $data1;
print "hi";
echo $data1;
$Donar_name=$_POST['Donar_name'];
$Donar_no=$_POST['Donar_no'];
$Donar_addr=$_POST['Donar_addr'];
$Donar_type=$_POST['Donar_type'];
$Donar_method=$_POST['Donar_method'];
$Donar_qnt=$_POST['Donar_qnt'];
$Med_name;
$records = mysqli_query($db,"select * from medrequest");

 while($data = mysqli_fetch_array($records))
{
    $request_id=$data['request-id'];
 
    if($request_id == $data1)
    {
        if($Donar_type == "brand")
        {
            $Med_name=$data['Med-Brand'];
        }
        else 
        {
            $Med_name=$data['Med-Gen'];
        }
    }


}

$sql="INSERT INTO requestdonar values('','$Donar_name','$Donar_no','$Donar_addr','$Donar_type','$Donar_method','$Donar_qnt','$request_id','$Med_name')";

if(mysqli_query($connect,$sql))
{
    echo '<script>alert("Data Added Successfully");window.location="request_view_page.php";</script>';
}
else
{
    echo '<script>alert("Something went wrong!");window.history.go(-1);</script>';
}
