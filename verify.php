<?php
$conn=mysqli_connect("localhost","root","","user_details");

if($conn === false){
    die("ERROR: Could not connect" . mysqli_connect_error());
}

$r=$_REQUEST['reg_no1'];
$c=$_REQUEST['ch_no1'];
$e=$_REQUEST['eng_no1'];
$v=$_REQUEST['v_type1'];

$sql = "SELECT * FROM rto_details WHERE reg_no='$r' and ch_no='$c' and eng_no='$e' " ;
if ($result = $conn->query($sql)){
    if($result->num_rows>0){
        echo "<h3>Data verified successfully.</h3>";
    }
    else{
        echo "<h3>Data not found.</h3>";
    } 
} else {
    echo "ERROR: Hush! Sorry" ;
}
        
mysqli_close($conn);
?>







