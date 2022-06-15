<?php 

    require_once("propertyconnect.php");

    $Branch_no = $_GET['GetID'];
    $query = "select * from branch where Branch_no='".$Branch_no."';";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Branch_no  = $row['Branch_no'];
        $Manager_ID = $row['Manager_ID'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <form action="updatebranchinfo.php?ID=<?php echo $Branch_no ?>" method="post">
            Enter the Branch number:
            <input class="form-control" type="text" name="Branch_no" placeholder="Branch number" value="<?php echo $Branch_no?>"><br>
            Enter the Manager ID of the Branch manager:
            <input class="form-control" type="text" name="Manager_ID" placeholder="Manager ID" value="<?php echo $Manager_ID?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>