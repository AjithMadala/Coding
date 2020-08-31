<?php
include 'config.php';
$name=$_POST['name'];
mysqli_query($conn,"setcharacter_set_results='utf-8' ");
if(@$_POST['submit'])
{
    $file=$_FILES['file'];
    $file_name=$file['name'];
    $file_type=$file['type'];
    $file_size=$file['size'];
    $file_path=$file['tmp_name'];
    
    echo $file;

    if(move_uploaded_file($file_path,'images/'.$file_name))

    $query="INSERT INTO PHOTOS(img,name)values('$file_name','$name')";
    $retval = mysqli_query($conn,$query);
    if($retval==true)
    {
        echo"File Uploaded";
    }

}
?>