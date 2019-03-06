<?php


function curPageURL() {
 $pageURL = 'http';
 if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$whatapi =(explode("/",curPageURL()));
//print_r($whatapi);

	if ($whatapi[5]=="discover"){
		$fp =fopen("COM4", "w+");
		if( !$fp) {
			echo "Error";die();
		}
		if ($whatapi[6]=="all"){
			fwrite($fp, "D");
		}else{
			fwrite($fp, $whatapi[6].":D");
		}
		
		$sensorlist = fread($fp, 20);
		echo substr($sensorlist,0,-1);
		fclose($fp);
	}else if ($whatapi[5]=="ledon"){
		$fp =fopen("COM4", "w+");
		if( !$fp) {
			echo "Error";die();
		}
		if ($whatapi[6]=="all"){
			fwrite($fp, "H");
		}else{
			fwrite($fp, $whatapi[6].":H");
		}
		fclose($fp);
	}else if ($whatapi[5]=="ledoff"){
		$fp =fopen("COM4", "w+");
		if( !$fp) {
			echo "Error";die();
		}
		if ($whatapi[6]=="all"){
			fwrite($fp, "L");
		}else{
			fwrite($fp, $whatapi[6].":L");
		}
		fclose($fp);
	}else if ($whatapi[5]=="temperature"){
		$fp =fopen("COM4", "w+");
		if( !$fp) {
			echo "Error";die();
		}
		if ($whatapi[6]=="all"){
			fwrite($fp, "T");
		}else{
			fwrite($fp, $whatapi[6].":T");
		}
		$temp = fread($fp, 10);
		echo $temp;
		fclose($fp);
	}else if ($whatapi[5]=="light"){
		$fp =fopen("COM4", "w+");
		if( !$fp) {
			echo "Error";die();
		}
		if ($whatapi[6]=="all"){
			fwrite($fp, "F");
		}else{
			fwrite($fp, $whatapi[6].":F");
		}
		$light = fread($fp, 10);
		echo $light;
		fclose($fp);
	}else if ($whatapi[5]=="capabilities"){
		$fp =fopen("COM4", "w+");
		if( !$fp) {
			echo "Error";die();
		}
		if ($whatapi[7]=="all"){
			fwrite($fp, $whatapi[6].":C");
		}else{
			fwrite($fp, $whatapi[6].":C:".$whatapi[7]);
		}
		
		
		$cap = fread($fp, 20);
		echo $cap;
		fclose($fp);
	}


?>