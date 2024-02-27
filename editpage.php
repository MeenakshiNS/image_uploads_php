<?php include('conn.php');
$id=$_GET['id'];
$sql="SELECT * FROM upload WHERE id='$id' ";
$sql_run=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($sql_run);
if(isset($_POST["submit"])) { 
    // $sql1="UPDATE upload SET img='$'"

    $image_name=$_FILES['img']['name'];
    $image_tmp_name=$_FILES['img']['tmp_name'];

    $sql="UPDATE upload SET img='$image_name' WHERE  id='$id' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($image_tmp_name,$image_name);
        header("location:http://localhost/file_upload/editImg.php");

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit page</title>
</head>
<body>
    <h1>edit image here!!!!</h1>
    <h3>image</h3>
    <form action="" method="post" enctype="multipart/form-data">
    <img src="<?php echo $row['img'] ?>" alt="" height="180px" width="180px">
    <input type="file" name="img" id="">
    <input type="submit" name="submit" id="">


    </form>

</body>
</html>