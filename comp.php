
<?php
$conn=mysqli_connect("localhost","root","","complaint");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$r=$_REQUEST['loc'];
$c=$_REQUEST['ph_no'];
$e=$_REQUEST['v_type'];
$a=$_REQUEST['c_vech'];
$n=$_REQUEST['reg_no'];
$v=$_REQUEST['area'];

$sql = "INSERT INTO c_details VALUES('$r','$c','$e','$a','$n','$v')";
if (mysqli_query($conn, $sql)){
    echo "<h3>complaint registered successfully.</h3>";

    echo nl2br("\n$r \n$c \n$e \n$a \n$n \n$v");
} else {
    echo "ERROR: Hush! Sorry" ;
}
        
mysqli_close($conn);
?>




