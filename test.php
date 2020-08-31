<?php
include 'config.php';
$query=" INSERT INTO ApriliaModel(id,ModelName,ModelImage)VALUES(3,SR150,SR150.jpg) ";

$retval=mysqli_query($conn,$query);

if($retval==true)
{
echo "file uploaded";
}
else{
    echo"Not Uploaded";
}

?>