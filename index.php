<?php

function get_youtube_id_from_url($url)
{
       if(stristr($url,'g-high-rch/'))
       {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
       else
       {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
}
function random($len)
{
 $result = "";
$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
$charArray = str_split($chars);   
 for($i = 0; $i < $len; $i++){
 $randItem = array_rand($charArray);
 $result .= "".$charArray[$randItem];
 }
 return $result;
}
function randomcpn($len)
{
 $result = "";
$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz-_";
$charArray = str_split($chars);   
 for($i = 0; $i < $len; $i++){
 $randItem = array_rand($charArray);
 $result .= "".$charArray[$randItem];
 }
 return $result;
}
$array = json_decode(file_get_contents("http://vmofficials.com/youtubev3"));
$count = count($array); 
for($i=1;$i<=$count;$i++)
{
$no1 = $array[rand(0,$count)];
$no1 = get_youtube_id_from_url($no1->link);
$plid = 'AAV6'.randomcpn(12);
$cpn = randomcpn(16);
$ei = randomcpn(20);
$video = 100;
$aqi=randomcpn(22); 
$v = rand(10,100); 


           $lact = rand(200,500); 
            $lact2 = rand(850,950); 
        $lact3 = rand(3550,4400); 
        $lact4 = rand(5660,7000); 
        
            $lact5 = rand(7660,8000); 
        $lact6 = rand(8960,9000); 
         $fmt = rand(243,247); 

$l1 = "https:\/\/www.youtube.com\/api\/stats\/playback?ns=yt&el=detailpage&cpn=$cpn&docid=$no1&ver=2&uga=m31&referrer=https://www.youtube.com/watch?v=ScZFzmN-8XY&start_radio=1&list=RDScZFzmN-8XY&cmt=0.098&plid=$plid&ei=$ei&fmt=244&fs=0&rt=1.061&euri=&lact=$lact&cl=220306130&mos=0&vm=CAEQABgE&volume=$v&c=TV_UNPLUGGED_CAST&cver=6.20180807&cplayer=UNIPLAYER&cbr=Chrome&cbrver=68.0.3440.106&cos=Windows&cosver=10.0&hl=en_US&cr=IN&len=$video&fexp=23756212%2C23760183%2C23765846%2C23759439%2C23763505%2C23721020%2C23760716%2C23723594%2C23764506%2C23765548%2C23755781%2C23732715%2C23760345%2C23726563%2C23724086%2C23765016%2C23754579%2C23734875%2C23750564%2C23728350%2C23736694%2C23753819%2C23752869%2C23755168%2C9466592%2C9477355%2C9449243%2C9437897%2C9471648%2C9489375%2C9475668&afmt=251&feature=g-high-rch&of=&uoo=1_2&upt=CgM2NzESBTY3MzAxGgJVUw";


$l3 = "https:\/\/www.youtube.com\/api\/stats\/watchtime?ns=yt&el=detailpage&cpn=$cpn&docid=$no1&ver=2&uga=m31&referrer=https://www.youtube.com/watch?v=ScZFzmN-8XY&start_radio=1&list=RDScZFzmN-8XY&euri=&cmt=3.378&plid=$plid&ei=$ei&fmt=244&fs=0&rt=3.836&lact=$lact3&cl=220306130&vm=CAEQABgE&volume=$v&c=TV_UNPLUGGED_CAST&cver=6.20180807&cplayer=UNIPLAYER&cbr=Chrome&cbrver=68.0.3440.106&cos=Windows&cosver=10.0&hl=en_US&cr=IN&len=$video&rtn=3&afmt=251&state=playing&idpj=-5&ldpj=-29&rti=20&muted=0&st=0&et=13.378&feature=g-high-rch&of=&uoo=1_2&upt=CgM2NzESBTY3MzAxGgJVUw";


$l4 = "https:\/\/www.youtube.com\/api\/stats\/watchtime?ns=yt&el=detailpage&cpn=$cpn&docid=$no1&ver=2&uga=m31&referrer=https://www.youtube.com/watch?v=ScZFzmN-8XY&start_radio=1&list=RDScZFzmN-8XY&euri=&cmt=28.865&plid=$plid&ei=$ei&fmt=244&fs=0&rt=28.717&lact=$lact4&cl=220306130&vm=CAEQABgE&volume=$v&c=TV_UNPLUGGED_CAST&cver=6.20180807&cplayer=UNIPLAYER&cbr=Chrome&cbrver=68.0.3440.106&cos=Windows&cosver=10.0&hl=en_US&cr=IN&len=$video&rtn=28&afmt=251&state=playing&idpj=-5&ldpj=-29&rti=14&muted=0&st=13.378&et=28.865&feature=g-high-rch&of=&uoo=1_2&upt=CgM2NzESBTY3MzAxGgJVUw";


$l5 = "https:\/\/www.youtube.com\/api\/stats\/watchtime?ns=yt&el=detailpage&cpn=$cpn&docid=$no1&ver=2&uga=m31&referrer=https://www.youtube.com/watch?v=ScZFzmN-8XY&start_radio=1&list=RDScZFzmN-8XY&euri=&cmt=48.865&plid=$plid&ei=$ei&fmt=244&fs=0&rt=48.717&lact=$lact5&cl=220306130&vm=CAEQABgE&volume=$v&c=TV_UNPLUGGED_CAST&cver=6.20180807&cplayer=UNIPLAYER&cbr=Chrome&cbrver=68.0.3440.106&cos=Windows&cosver=10.0&hl=en_US&cr=IN&len=$video&rtn=48&afmt=251&state=playing&idpj=-5&ldpj=-29&rti=14&muted=0&st=28.876&et=48.865&feature=g-high-rch&of=&uoo=1_2&upt=CgM2NzESBTY3MzAxGgJVUw";

}

$a = '<!DOCTYPE html>
<html lang="en">
	
	
	<body><script>
var meta = document.createElement("meta");
meta.name = "referrer";
meta.content = "no-referrer";
document.getElementsByTagName("head")[0]["appendChild"](meta);

function g(s) {
	(new Image).src = s;
}


var d = [
          ["'.$l1.'", "'.$l3.'", "'.$l4.'", "'.$l5.'", "'.$l5.'"]
    ];
    

// console.log(d)
var dl = d.length;

for(var i = 0, dl = d.length; i < dl; i++) {
	(function(x) {
		setTimeout(function() {
			for(var j = 0, djl = d[x].length; j < d[x].length; j++) {
				(function(j1) {
					setTimeout(function(){
						g(d[x][j1]);

						if(x === dl - 1  && j1 === djl - 1) {
							setTimeout(function(){
								// location.reload()
							}, 3e3)
						}
					}, j1 * 1e3)
				})(j)
			}
		}, x * 2e3)
	})(i)
	
}

					</script>
				</body>
			</html>';
			
$a = base64_encode($a);

?>
<iframe src="data:text/html;base64,<?php echo $a; ?>" frameborder="0"></iframe>
