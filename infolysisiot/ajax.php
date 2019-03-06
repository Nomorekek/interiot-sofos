<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php


$con = mysqli_connect('127.0.0.1','root','Admin2015','sensors');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}




//AJAX REQUESTS
$req = intval($_GET['req']);

if ($req==1){
$sql="SELECT myvalue FROM systemstatus where mykey='mappers'";
  $result = mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($result)){
    echo $row['myvalue'];
  }
}else if ($req==2){
  //$sql="SELECT myvalue FROM systemstatus where mykey='generators'";
  //$result = mysqli_query($con,$sql);
  //while ($row = mysqli_fetch_array($result)){
  //  echo $row['myvalue'];
  //}
}else if ($req==3){
$sql="SELECT myvalue FROM systemstatus where mykey='generators'";
  $result = mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($result)){
    echo $row['myvalue'];
  }
}else if ($req==4){
$sql="SELECT myvalue FROM systemstatus where mykey='ofrules'";
  $result = mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($result)){
    echo $row['myvalue'];
  }
}
else if ($req==5){
$sql="SELECT id,nodename,alive FROM nodes";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){
?>

<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo $row['id']." - ".$row['nodename']; ?>
                  <?php
                  if ($row['alive']==1){
                    echo " <span class=\"badge bg-green\">Online</span>";
                  }else{
                    echo " <span class=\"badge bg-red\">Offline</span>";
                  }

                  ?>
                  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 10px">id</th>
                                            <th>Type</th>
                                            <th style="width: 40px">State</th>
                      <th>Misc</th>
                                        </tr>

                    <?php
                    $sql3="SELECT nodeid,alarmmode FROM settings where nodeid='".$row['id']."'";
                    $result3 = mysqli_query($con,$sql3);
                    while ($row3 = mysqli_fetch_array($result3)){
                    ?>
                    <tr>
                      <td>-</td>
                                            <td>Alarm Mode</td>
                                            <td><span class="badge <?php
                      if ($row3['alarmmode']=="1"){
                        echo "bg-green";
                      }else{
                        echo "bg-red";
                      }

                      ?>"><?php
                      if ($row3['alarmmode']=="1"){
                        echo "on";
                      }else{
                        echo "off";
                      }
                      ?></span></td>
                      <td></td>

                    </tr>

                    <?php
                    }

                    $sql2="SELECT id,sensortype,sensorstate,alarmthreshold,senserate FROM sensors where nodeid='".$row['id']."'";
                    $result2 = mysqli_query($con,$sql2);
                    while ($row2 = mysqli_fetch_array($result2)){

                    ?>
                    <tr>
                                            <td><?php echo $row2['id']; ?></td>
                                            <td><?php echo $row2['sensortype']; ?></td>

                                            <td><span class="badge <?php
                      if ($row2['sensorstate']=="on"){
                        echo "bg-green";
                      }else{
                        echo "bg-red";
                      }

                      ?>"><?php echo $row2['sensorstate']; ?></span></td>
                      <td><?php
                      if ($row2['sensortype']=="led"){

                      }else{
                        echo "alarmthreshold=".$row2['alarmthreshold'].", senserate=".$row2['senserate'];
                      }
                      ?></td>
                                        </tr>
                    <?php  } ?>





                                    </table>
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
<?php
}
}else if ($req==6){
$sql="SELECT alarms.id,alarms.timeandstamp,alarms.svalue,alarms.sensortype,alarms.nodeid FROM alarms ORDER BY id DESC LIMIT 15";
$result = mysqli_query($con,$sql);

$sql2="select * from instances where id='8'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
  $fire = $row2["instancestate"];
}

$sql2="select * from instances where id='9'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $storm = $row2["instancestate"];
}

$sql2="select * from instances where id='10'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $explosion = $row2["instancestate"];
}

while ($row = mysqli_fetch_array($result)){

$myinstancestate="off";
$sql2="select * from instances where instancename='".$row['nodeid']."'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $myinstancestate = $row2["instancestate"];
}


if ($row['sensortype']=="explosion"){
?>


<div class="alert alert-warning">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - EXPLOSION @ ".$row['nodeid']; ?>
 </div>

<?php
}else if ($row['sensortype']=="fire"){
?>

<div class="alert alert-danger">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - FIRE @ ".$row['nodeid']; ?>
 </div>


<?php
}else if ($row['sensortype']=="heavyrain"){
?>

<div class="alert alert-info">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - HEAVY RAIN @ ".$row['nodeid']; ?>
 </div>


<?php
}else if ($row['sensortype']=="highwinds"){
?>

<div class="alert alert-info">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - HIGH WINDS @ ".$row['nodeid']; ?>
 </div>


<?php
}else if ($row['sensortype']=="storm"){
?>

<div class="alert alert-info">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - STORM @ ".$row['nodeid']; ?>
 </div>


<?php
}else if ($row['sensortype']=="blizzard"){
?>

<div class="alert alert-info">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - BLIZZARD @ ".$row['nodeid']; ?>
 </div>


<?php
}else if ($row['sensortype']=="heatweave"){
?>

<div class="alert alert-info">
<i class="fa fa-warning"></i>

 <b><?php echo $row['timeandstamp']." - HEATWEAVE @ ".$row['nodeid']; ?>
 </div>


<?php
}


}
}else if ($req==7){

//echo "Data Flow: <br>HTTP Mapping VNF: <br>MQTT Mapping VNF: <br>COAP Mapping VNF: <br>INTER-IOT Link: <br>";

$sql2="select * from instances where id='11'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $status1 = $row2["instancestate"];
}
$sql2="select * from instances where id='12'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $status2 = $row2["instancestate"];
}
$sql2="select * from instances where id='13'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $status3 = $row2["instancestate"];
}
$sql2="select * from instances where id='14'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $status4 = $row2["instancestate"];
}
$sql2="select * from instances where id='15'";
$result2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($result2)){
        $status5 = $row2["instancestate"];
}

if ($status1=="ok"){
  echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-success\"><h4><i class=\"icon fa fa-check\"></i> Data Flow: OK</h4></div></div></div>";
}else{
  echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-danger\"><h4><i class=\"icon fa fa-warning\"></i> Data Flow: FAIL</h4></div></div></div>";
}
if ($status2=="ok"){
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-success\"><h4><i class=\"icon fa fa-check\"></i> HTTP Mapping VNF: OK</h4></div></div></div>";
}else{
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-danger\"><h4><i class=\"icon fa fa-warning\"></i> HTTP Mapping VNF: FAIL</h4></div></div></div>";
}
if ($status3=="ok"){
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-success\"><h4><i class=\"icon fa fa-check\"></i> COAP Mapping VNF: OK</h4></div></div></div>";
}else{
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-danger\"><h4><i class=\"icon fa fa-warning\"></i> COAP Mapping VNF: FAIL</h4></div></div></div>";
}
if ($status4=="ok"){
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-success\"><h4><i class=\"icon fa fa-check\"></i> MQTT Mapping VNF: OK</h4></div></div></div>";
}else{
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-danger\"><h4><i class=\"icon fa fa-warning\"></i> MQTT Mapping VNF: FAIL</h4></div></div></div>";
}
if ($status5=="ok"){
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-success\"><h4><i class=\"icon fa fa-check\"></i> INTER-IOT Link: OK</h4></div></div></div>";
}else{
echo "<div class=\"row\"><div class=\"col-sm-4\"><div class=\"alert alert-danger\"><h4><i class=\"icon fa fa-warning\"></i> INTER-IOT Link: FAIL</h4></div></div></div>";
}




}





/*
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";

*/
mysqli_close($con);
?>
</body>
</html>
