<?php
$conn=mysqli_connect("localhost","root","","user_details");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$r=$_REQUEST['reg_no'];
$c=$_REQUEST['ch_no'];
$e=$_REQUEST['eng_no'];
$a=$_REQUEST['ad_no'];
$n=$_REQUEST['name'];
$p=$_REQUEST['ph_no'];
$ad=$_REQUEST['address']; 
$v=$_REQUEST['v_type'];

$sql = "INSERT INTO rto_details VALUES('$r','$c','$e',$a,'$n',$p,'$ad','$v')";
if (mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>";

    echo nl2br("\n$r \n$c \n$e \n$a \n$n \n$p \n$ad \n$v");
} else {
    echo "ERROR: Hush! Sorry" ;
}
        
mysqli_close($conn);
?>