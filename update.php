<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        button a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
    include 'connect.php';
        $id=$_GET['updateid'];
        if(isset($_POST['submit'])){
            $book_name=$_POST['tbook'];
            $pub_name=$_POST['tpub'];
            $price=$_POST['tprice'];

        $sql="update crud set id='$id', book_name='$book_name', pub_name='$pub_name', price='$price'";
        if(mysqli_query($conn,$sql)){
            echo "Record updated successfully";
        }
        else{
            echo "Error updating record:" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    ?>    
     <div class="container mt-5">
        <form method="post">
            <div class="form-group mb-3">
                <label>Book_Name</label>
                <input type="text" class="form-control" placeholder="Enter your book name" name="tbook">
            </div>
            <div class="form-group mb-3">
                <label>Pub_Name</label>
                <input type="text" class="form-control" placeholder="Enter your pub name" name="tpub">
            </div>
            <div class="form-group mb-3">
                <label>Price</label>
                <input type="number" class="form-control" placeholder="Enter your price" name="tprice">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-danger"><a class="text text-light" href="display.php">Back</a></button>
        </form>
    </div>
</body>
</html>