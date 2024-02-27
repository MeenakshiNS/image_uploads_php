<?php include('conn.php');

$id=$_GET['id'];

$sql="DELETE FROM upload WHERE id='$id'";
$sql_run=mysqli_query($conn,$sql);

if($sql_run){
    echo "deleted  successfully!";
    header("location:http://localhost/file_upload/editImg.php");
}else{
    echo "error in deleting";
}




?>