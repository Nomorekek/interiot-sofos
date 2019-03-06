<?php

$con = mysqli_connect('127.0.0.1','root','Admin2015','sensors');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

if ($_GET['req']==1){
#$sql="SELECT * FROM (SELECT * FROM mydata where hostname='a6d24c7efeae' ORDER BY id DESC LIMIT 100) sub ORDER BY id ASC";
$sql ="select * from mydata where hostname='".$_GET["hostname"]."' order by id desc limit 100";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){
$key = $row["id"];
$data[$key] = $row['data'];

}
echo json_encode($data);
}else if ($_GET['req']==2){
$sql="SELECT * FROM (SELECT * FROM temp ORDER BY id DESC LIMIT 100) sub ORDER BY id ASC";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){
$key = explode(" ",$row['timeandstamp']);
$data[$key[1]] = $row['svalue'];

}
echo json_encode($data);
}else if ($_GET['req']==3){
$dstart = $_GET['start'];
$dend = $_GET['end'];
$sql="select * from light where id>'$dstart' and id<'$dend'";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){
$data[$row['timeandstamp']] = $row['svalue'];

}
echo json_encode($data);
}else if ($_GET['req']==4){
$dstart = $_GET['start'];
$dend = $_GET['end'];
$sql="select * from temp where id>'$dstart' and id<'$dend'";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){
$data[$row['timeandstamp']] = $row['svalue'];

}
echo json_encode($data);
}
mysqli_close($con);

?>
