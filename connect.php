<?php
$conn=new mysqli("localhost", "root", "", "crud_operations");
if($conn){
    echo "<h3>Connected successfully</h3>";
}
else{
    die(mysqli_error($conn));
}
?>