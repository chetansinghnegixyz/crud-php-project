<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

$sql="delete from crud where id=$id";

if(mysqli_query($conn,$sql)){
    echo "Record deleted successfully"."<br>";
} 
else{
    echo "Error deleting record: " . mysqli_error($conn)."<br>";
}
}
mysqli_close($conn); 
?>
