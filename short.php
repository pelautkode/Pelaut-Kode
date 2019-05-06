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
sleep(1);
echo "masukan license awal : ";
$lic = trim(fgets(STDIN));
sleep(1);
echo "masukan jumlah generate : ";
$jum = trim(fgets(STDIN));
for ($i=1; $i <= $jum; $i++) {
$h = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$a = "1234567890";
$r = $h.$a;
$go = str_shuffle($r);
$rand = substr($go, rand(0,20), 6);
$file = "list_key.txt";
//menggabungkan license awal dengan hasil generate
$res = $lic."-".$rand."\n";
touch($file);
$o = fopen($file, 'a');
fwrite($o, $res);
fclose($o);
}
