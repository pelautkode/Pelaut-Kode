#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
function input($echo) {
	echo $echo." --> ";
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo "\n$green
                        _    
                     _\( )/_            
Hi! i'm Pelaut Kode   /(O)\  //  \\        
                            _\\()//_    
Trust me, i'm Love You.    / //  \\ \      
                            | \__/ |\n".$red.
"======================================";
echo $blue."
Author  : Pelaut Kode
Github  : http://github.com/Pelautkode
Team    : System Cyber Security
Date    : 06-05-2019\n";
echo $red."=====================================".$green."\n";
if(isset($argv[1])) {
	$url=$argv[1];
} else {
	echo "Usage : php short.php www.example.com\n";
	die();
}
$param="https://www.googleapis.com/urlshortener/v1/url?key=AIzaSyDKvTCsXX3Vipbqyhj3a0JH1D3JYMuB5VM";
$post = array(
"longUrl"=> $url
);
$jsondata = json_encode($post);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$param);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type:application/json"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
$response=curl_exec($ch);
curl_close($ch);
$json=json_decode($response);
//print_r($json);
if(isset($json->error)) {
	echo $json->error->message;
	} else {
		echo "Link   : ".$json->longUrl."\n";
		echo "Result : ".$json->id."\n";
		}
echo $red."=========================== Cvar1984 ))=====(@)>".$green."\n";
