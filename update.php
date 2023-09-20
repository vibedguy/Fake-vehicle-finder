<?php
$conn=mysqli_connect("localhost","root","","database_name");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];


$sql = "UPDATE tablename SET $e = '$p' WHERE name = '$n' ";
if (mysqli_query($conn, $sql)){
    echo "<h3>Your order updated in a database successfully.</h3>";

} else {
    echo "ERROR: Unable to do operation" ;
}
        
mysqli_close($conn);
?>