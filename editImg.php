<?php include('conn.php');
$sql="SELECT * FROM upload";
$sql_run=mysqli_query($conn,$sql);
// if($sql_run){
//     print_r($sql_run) ;
// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Re-upload image</h1>
   
        <table style="border:solid black 2px">
            <tr>
                <th>id</th>
                <th>image</th>
                <th colspan-2>action</th>
                
            </tr>
<?php
while($row=mysqli_fetch_array($sql_run)){
    ?>
            <tr>
                <td><?php echo  $row['id'] ?></td>
                <td>
            <img src="<?php echo  $row['img'] ?>" alt="" height="150px" width="150px"></td>
                <td><a href="editpage.php?id=<?php echo  $row['id'] ?>" >edit</a></td>
                <td> <a href="deletepage.php?id=<?php echo  $row['id'] ?>" >delete </a></td>
            </tr>
            <?php
}
?>
        </table>
   
</body>
</html>