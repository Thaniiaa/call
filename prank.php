<?php
function get($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	return $result;
}
print "Bom Call - Nabila Tools\n";
print "Masukan Nomor(8xx): ";
$nmr = trim(fgets(STDIN));
print "Jumlah: ";
$jum = trim(fgets(STDIN));
for($a = 0; $a<$jum; $a++){
$gas = get("https://thania-tools.000webhostapp.com/call.php?no=$nmr");
print "$gas\n";
sleep(2);
}
?>