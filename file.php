<?php include('conn.php');

if(isset($_POST['submit'])){
    // print_r($_POST) ;
    // $image=$_FILES['img'];

    // print_r($image);

    $image_name=$_FILES['img']['name'];
    $image_tmp_name=$_FILES['img']['tmp_name'];

    $sql="INSERT INTO upload(img) VALUES('$image_name')";
    $result=mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($image_tmp_name,$image_name);
        

    }
 } 
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>upload image</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id=""><br><br>
        <input type="submit" name="submit" id="" value="upload">

    </form>

    <h3>displaying images</h3>
    <?php
    $sql1="SELECT * FROM upload";
    $result=mysqli_query($conn,$sql1);
    while($row=mysqli_fetch_array($result)){
        ?>
        <img src="<?php echo $row['img'] ?>" alt="" width="300px" height="300px">

    <?php
    }

    ?>

</body>
</html>

