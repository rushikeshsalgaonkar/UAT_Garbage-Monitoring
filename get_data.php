<?php
$con = mysqli_connect('localhost','iotvehic_vtacc','~F0BmU5&q(X%','iotvehic_vtacc');
$sth = mysqli_query($con,"SELECT * FROM tru");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
$json_data = json_encode($rows);
echo $json_data;
?>