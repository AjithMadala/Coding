<html>

<head>
    <link rel="stylesheet" href="BootstrapCdn/bootstrap.min.css">
    <script src="BootstrapCdn/bootstrap.min.js"></script>
    <script src="BootstrapCdn/jquery.min.js"></script>
    <style>
        body {
            margin-left: 550px;
            margin-top: 250px;
        }
    </style>
</head>

<body>

<form action="addmdl2.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <div class="row">
                <div class="col-md-4">
                    <label for="br">Brand</label>                  
                    <select class="form-control" name="br" id="br">
<?php
include 'config.php';
$sql="SELECT * FROM Bike_Brand ORDER BY Brand ASC";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo"
           <option>".$row['Brand']."</option>
        ";
    }
}
?> 
   </select><br />
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="mdl">Model Name</label>
                    <input type="text" name="model" class="form-control" id="mdl"></input><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="file">Image of Model</label>
                    <input type="file" name="file" class="form-control" id="file"></input><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="submit" name="submit" class="form-control">
                </div>
            </div>
        </div>
    </form>
</body>

</html>
