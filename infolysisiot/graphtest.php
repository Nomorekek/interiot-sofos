<html>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="springy.js"></script>
<script src="springyui.js"></script>
<script>
var graph = new Springy.Graph();

var infolysisiot = graph.newNode({
  label: 'infolysisiot',
  color: '#ff0000',
  ondoubleclick: function() { alert("INFOLYSIS-IOT!"); }
});

<?php
$con = mysqli_connect('127.0.0.1','root','Admin2015','sensors');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$httpmap="off";
$sql="SELECT instancestate FROM instances where instancename='httpmap'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
  if ($row['instancestate']=="on"){
    $httpmap="on";
  }
}
$coapmap="off";
$sql="SELECT instancestate FROM instances where instancename='coapmap'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
  if ($row['instancestate']=="on"){
    $coapmap="on";
  }
}
$mqttmap="off";
$sql="SELECT instancestate FROM instances where instancename='mqttmap'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
  if ($row['instancestate']=="on"){
    $mqttmap="on";
  }
}
$httpgen="off";
$sql="SELECT instancestate FROM instances where instancename='httpgen'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
  if ($row['instancestate']=="on"){
    $httpgen="on";
  }
}
$coapgen="off";
$sql="SELECT instancestate FROM instances where instancename='coapgen'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
  if ($row['instancestate']=="on"){
    $coapgen="on";
  }
}
$mqttgen="off";
$sql="SELECT instancestate FROM instances where instancename='mqttgen'";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result)){
  if ($row['instancestate']=="on"){
    $mqttgen="on";
  }
}



mysqli_close($con);
?>

<?php if ($httpmap=="on"){ ?>
var httpmap = graph.newNode({label: 'httpmap'});
graph.newEdge(httpmap, infolysisiot, {color: '#000000'});
<?php } ?>

<?php if ($coapmap=="on"){ ?>
var coapmap = graph.newNode({label: 'coapmap'});
graph.newEdge(coapmap, infolysisiot, {color: '#000000'});
<?php } ?>

<?php if ($mqttmap=="on"){ ?>
var mqttmap = graph.newNode({label: 'mqttmap'});
graph.newEdge(mqttmap, infolysisiot, {color: '#000000'});
<?php } ?>


<?php if ($httpgen=="on"){ ?>
var httpgen1 = graph.newNode({label: 'httpgen1'});
var httpgen2 = graph.newNode({label: 'httpgen2'});
var httpgen3 = graph.newNode({label: 'httpgen3'});
var httpgen4 = graph.newNode({label: 'httpgen4'});
var httpgen5 = graph.newNode({label: 'httpgen5'});
<?php } ?>

<?php if ($coapgen=="on"){ ?>
var coapgen1 = graph.newNode({label: 'coapgen1'});
var coapgen2 = graph.newNode({label: 'coapgen2'});
var coapgen3 = graph.newNode({label: 'coapgen3'});
var coapgen4 = graph.newNode({label: 'coapgen4'});
var coapgen5 = graph.newNode({label: 'coapgen5'});
<?php } ?>

<?php if ($mqttgen=="on"){ ?>
var mqttgen1 = graph.newNode({label: 'mqttgen1'});
var mqttgen2 = graph.newNode({label: 'mqttgen2'});
var mqttgen3 = graph.newNode({label: 'mqttgen3'});
var mqttgen4 = graph.newNode({label: 'mqttgen4'});
var mqttgen5 = graph.newNode({label: 'mqttgen5'});
<?php } ?>


<?php if ($httpgen=="on" && $httpmap=="on"){ ?>
graph.newEdge(httpgen1, httpmap, {color: '#000000'});
graph.newEdge(httpgen2, httpmap, {color: '#000000'});
graph.newEdge(httpgen3, httpmap, {color: '#000000'});
graph.newEdge(httpgen4, httpmap, {color: '#000000'});
graph.newEdge(httpgen5, httpmap, {color: '#000000'});
<?php } ?>

<?php if ($coapgen=="on" && $coapmap=="on"){ ?>
graph.newEdge(coapgen1, coapmap, {color: '#000000'});
graph.newEdge(coapgen2, coapmap, {color: '#000000'});
graph.newEdge(coapgen3, coapmap, {color: '#000000'});
graph.newEdge(coapgen4, coapmap, {color: '#000000'});
graph.newEdge(coapgen5, coapmap, {color: '#000000'});

<?php } ?>

<?php if ($mqttgen=="on" && $mqttmap=="on"){ ?>
graph.newEdge(mqttgen1, mqttmap, {color: '#000000'});
graph.newEdge(mqttgen2, mqttmap, {color: '#000000'});
graph.newEdge(mqttgen3, mqttmap, {color: '#000000'});
graph.newEdge(mqttgen4, mqttmap, {color: '#000000'});
graph.newEdge(mqttgen5, mqttmap, {color: '#000000'});
<?php } ?>







jQuery(function(){
  var springy = window.springy = jQuery('#springydemo').springy({
    graph: graph,
    nodeSelected: function(node){
      console.log('Node selected: ' + JSON.stringify(node.data));
    }
  });
});
</script>

<canvas id="springydemo" width="620" height="380" />
</body>
</html>
