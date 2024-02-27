<?php
$host="localhost";
$username="root";
$password="";
$database="file_upload";
$conn = mysqli_connect($host,$username,$password,$database);
if($conn){
    echo "connected successfully";
}else{
    echo "Not connected";
}
?>