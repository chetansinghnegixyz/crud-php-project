<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        button a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <button class="btn btn-primary"><a class="text text-light" href="crud form.php">Add User</a></button>
        <table class="table table-striped">
    <thead>
      <tr>
        <th>S.NO.</th>
        <th>BOOK_NAME</th>
        <th>PUB_NAME</th>
        <th>PRICE</th>
        <th>OPERATIONS</th>
      </tr>
    </thead>
   <tbody>
    <?php
    include 'connect.php';

    $sql="Select * from crud";

    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $id=$row['id'];
        $book_name=$row['book_name'];
        $pub_name=$row['pub_name'];
        $price=$row['price'];
?>
<tr>
<td><?php echo $row['id'] . "<br>"?></td>
<td><?php echo $row['book_name'] . "<br>"?></td>
<td><?php echo $row['pub_name'] . "<br>"?></td>
<td><?php echo $row['price'] . "<br>"?></td>
<td>
  <button type="submit" class="btn btn-primary"><a class="text text-light" href="update.php?updateid=<?php echo $row['id']?>" onclick="return confirm('Are you sure want to update this record?');">Update</a></button>
  <button type="delete" class="btn btn-danger deletebtn"><a class="text text-light" href="delete.php?deleteid=<?php echo $row['id']?>" onclick="return confirm('Are you sure want to delete this record?');">Delete</a></button>
</td>
</tr>
<?php
}
}
else
{
echo "No Record Fetch". "<br>";
}
mysqli_close($conn);
?>
</tr>
  </tbody>
</table>
    </div>
</body>
</html>