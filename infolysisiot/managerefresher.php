<html>
<head>
<?php

$con = mysqli_connect('127.0.0.1','root','Admin2015','sensors');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
                  if ($_GET['ti']=="on"){
                    $sql4="update instances set instancestate='on' where id='".$_GET['id']."'";
                    $result4 = mysqli_query($con,$sql4);
                    if ($_GET['id']=="2" || $_GET['id']=="3" || $_GET['id']=="4"){
                      $helpervalue="0";
                      $sql="SELECT myvalue FROM systemstatus where mykey='mappers'";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)){
                        $helpervalue = $row['myvalue'];
                      }
                      $helpervalue = $helpervalue + 1;
                      $sql="update systemstatus set myvalue='$helpervalue' where mykey='mappers'";
                      $result = mysqli_query($con,$sql);
                      $sql="SELECT myvalue FROM systemstatus where mykey='ofrules'";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)){
                        $helpervalue = $row['myvalue'];
                      }
                      $helpervalue = $helpervalue + 5;
                      $sql="update systemstatus set myvalue='$helpervalue' where mykey='ofrules'";
                      $result = mysqli_query($con,$sql);
                    }else if ($_GET['id']=="5" || $_GET['id']=="6" || $_GET['id']=="7"){
                      $helpervalue="0";
                      $sql="SELECT myvalue FROM systemstatus where mykey='generators'";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)){
                        $helpervalue = $row['myvalue'];
                      }
                      $helpervalue = $helpervalue + 5;
                      $sql="update systemstatus set myvalue='$helpervalue' where mykey='generators'";
                      $result = mysqli_query($con,$sql);
                    }else{
      $sql4="update instances set instancestate='on' where instancename='".$_GET['id']."'";
                   $result4 = mysqli_query($con,$sql4);
        }
                  }else{
                    $sql4="update instances set instancestate='off' where id='".$_GET['id']."'";
                    $result4 = mysqli_query($con,$sql4);
                    if ($_GET['id']=="2" || $_GET['id']=="3" || $_GET['id']=="4"){
                      $helpervalue="0";
                      $sql="SELECT myvalue FROM systemstatus where mykey='mappers'";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)){
                        $helpervalue = $row['myvalue'];
                      }
                      $helpervalue = $helpervalue - 1;
                      $sql="update systemstatus set myvalue='$helpervalue' where mykey='mappers'";
                      $result = mysqli_query($con,$sql);
                      $sql="SELECT myvalue FROM systemstatus where mykey='ofrules'";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)){
                        $helpervalue = $row['myvalue'];
                      }
                      $helpervalue = $helpervalue - 5;
                      $sql="update systemstatus set myvalue='$helpervalue' where mykey='ofrules'";
                      $result = mysqli_query($con,$sql);
                    }else if ($_GET['id']=="5" || $_GET['id']=="6" || $_GET['id']=="7"){
                      $helpervalue="0";
                      $sql="SELECT myvalue FROM systemstatus where mykey='generators'";
                      $result = mysqli_query($con,$sql);
                      while ($row = mysqli_fetch_array($result)){
                        $helpervalue = $row['myvalue'];
                      }
                      $helpervalue = $helpervalue - 5;
                      $sql="update systemstatus set myvalue='$helpervalue' where mykey='generators'";
                      $result = mysqli_query($con,$sql);
                    }else{
                        $sql4="update instances set instancestate='off' where instancename='".$_GET['id']."'";
                        $result4 = mysqli_query($con,$sql4);
                    }
                  }


mysqli_close($con);


//echo $_GET['ti'];
//echo "<br>";
//echo $_GET['id'];

                    ?>
<meta http-equiv="refresh" content="0;url=manage.php" />
</head>
</html>
