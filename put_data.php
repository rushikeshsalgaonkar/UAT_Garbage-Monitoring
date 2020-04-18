<?php
$con = mysqli_connect('localhost','iotvehic_vtacc','~F0BmU5&q(X%','iotvehic_vtacc');

if(!empty($_REQUEST))
{
   
	$lat = @$_REQUEST['lat'];
	$lon = @$_REQUEST['lon'];
	$gid = @$_REQUEST['gid'];
	$gct = @$_REQUEST['gct'];
	
	$deg = substr($lat,0,2);

	$min_temp = explode(',',substr($lat, 2));

	$min = $min_temp[0];

	$lat = round($deg+($min/60),6);

	$lon = substr($lon,1);
	$deg = substr($lon,0,2);

	$min_temp = explode(',',substr($lon, 2));

	$min = $min_temp[0];

	$lon = round($deg+($min/60),6);

$sql = "UPDATE tru SET lat='".$lat."',lon='".$lon."',gid='".$gid."',gct='".$gct."' WHERE gid=".$gid; 
mysqli_query($con, $sql);
}
?>