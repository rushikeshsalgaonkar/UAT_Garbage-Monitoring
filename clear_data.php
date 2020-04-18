<?php
$con = mysqli_connect('localhost','iotvehic_vtacc','~F0BmU5&q(X%','iotvehic_vtacc');
if(mysqli_query($con, "TRUNCATE abc"))
echo 'Data Cleared Sucessfully. <a href="index.php">View Map</a>';
else
echo 'Try Again. <a href="index.php">View Map</a>';
?>