<?php
include 'config.php';

$name= $_POST['brname'];

echo $name;
mysqli_query ($conn,"set character_set_results='utf8' ");
if(@$_POST['submit'])
{
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file['type'];
$file_size = $file['size'];
$file_path = $file['tmp_name'];

if($file_name!=="" && ($file_type="image/jpg"||$file_type="image/png"||$file_type="image/jpeg"||$file_type="image/gif") && $file_size<=61440)

if(move_uploaded_file ($file_path,'images/Logos/'. $file_name))

$query="INSERT INTO Bike_Brand(Brand,Logo)values('$name','$file_name')";

$retval=mysqli_query($conn,$query);

if($retval==true)
{
echo "file uploaded";
}
if($retval==false){
    echo"Not Uploaded";
}

}
?>