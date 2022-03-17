<?php

 $url = "https://free.currencyconverterapi.com/api/v5/convert?q=USD_PKR&&compact=ultra&apiKey=5a9b87f6d2ecb5da0ba6";
	    $ch = curl_init();
	    $timeout = 0;
	    curl_setopt ($ch, CURLOPT_URL, $url);
	    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
	    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	    $rawdata = curl_exec($ch);
	    curl_close($ch);
		

		
	     $convertResult = json_decode($rawdata);
	   echo '</br>'; 
	   echo $convertResult->PKR_USD;
	    echo '</br>';
	echo 	156.45;
	//number_format($convertResult->PKR_USD,2);
		
	    die('--');
	   echo  $LastIndex = end($convertResult->results);
	    if(isset($LastIndex->val)){
	     return round($LastIndex->val, 2);
	    }
	  //$convertResult = json_decode($rawdata);
	  

die();
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.paypal.com/v1/payments/payouts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{
  "sender_batch_header": {
    "email_subject": "You have a payment",
    "sender_batch_id": "2014342532570"
  },
  "items": [
   
    {
      "recipient_type": "EMAIL",
      "amount": {
        "value": "5.00",
        "currency": "USD"
      },
      "receiver": "pp_personal@hotmail.com",  
      "note": "Payouts sample transaction",
      "sender_item_id": "20145342355"
    },
	{
      "recipient_type": "EMAIL",
      "amount": {
        "value": "5.00",
        "currency": "USD"
      },
      "receiver": "sb-phhzk229605@personal.example.com",  
      "note": "Payouts sample transaction",
      "sender_item_id": "20145346754"
    }
	
    
	
	
	
  ]
}',


  CURLOPT_HTTPHEADER => array(
    'accept: application/json',
    'authorization: Bearer A21AAHhkJ07iTmtUbfzusGBTgNDW49dBYxmg7SnuNRxcNzeFyzSfVBjkL2vBIAmJ35K0TMUj8fSGjobQ10jH_hNCo6AmYW1ng',
    'content-type: application/json'
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

 $f= json_decode($response);

echo "<pre>";
 print_r($f);
echo "</pre>";


die();

// sender 4938.25 USD
//"receiver": "sb-phhzk229605@personal.example.com",  // 5030.00 USD
// "receiver": "pp_personal@hotmail.com",   // 5030.00 USD

echo 'SS'.rand().'com';
die();
 date_default_timezone_set("Asia/Karachi");
 
 echo $cdate  = date('Y-m-d h:i:s');;
 
 echo '</br>';
 
$t = date('Y-m-d H:i:s');
echo $t;

die();
echo  date("d M,Y h:i a",  '2019-09-03 08:24:15');


echo md5('5d6681eddb58f');
die();
//2019-08-07 05:34:03


function TimeAgo ($oldTime, $newTime) {
$timeCalc = strtotime($newTime) - strtotime($oldTime);
if ($timeCalc >= (60*60*24*30*12*2)){
 $timeCalc = intval($timeCalc/60/60/24/30/12) . " years ago";
 }else if ($timeCalc >= (60*60*24*30*12)){
 $timeCalc = intval($timeCalc/60/60/24/30/12) . " year ago";
 }else if ($timeCalc >= (60*60*24*30*2)){
 $timeCalc = intval($timeCalc/60/60/24/30) . " months ago";
 }else if ($timeCalc >= (60*60*24*30)){
 $timeCalc = intval($timeCalc/60/60/24/30) . " month ago";
 }else if ($timeCalc >= (60*60*24*2)){
 $timeCalc = intval($timeCalc/60/60/24) . " days ago";
 }else if ($timeCalc >= (60*60*24)){
 $timeCalc = " Yesterday";
 }else if ($timeCalc >= (60*60*2)){
 $timeCalc = intval($timeCalc/60/60) . " hours ago";
 }else if ($timeCalc >= (60*60)){
 $timeCalc = intval($timeCalc/60/60) . " hour ago";
 }else if ($timeCalc >= 60*2){
 $timeCalc = intval($timeCalc/60) . " minutes ago";
 }else if ($timeCalc >= 60){
 $timeCalc = intval($timeCalc/60) . " minute ago";
 }else if ($timeCalc > 0){
 $timeCalc .= " seconds ago";
 }
return $timeCalc;
}

echo TimeAgo('2019-08-07 12:27:42', date("Y-m-d H:i:s"));
die();




$servicechargesfee = 3;
$price = 200;

echo 'percentageprice-->'. $percentageprice =  ( (int) $price * (int)$servicechargesfee)/100;  

die();


// Fetches articles from the BBC news feed.
function fetch_rss(){

    $data = file_get_contents("http://feeds.bbci.co.uk/news/world/rss.xml");
   
	$data = simplexml_load_string($data);
	
	
    
    $articles = array();
    
    foreach ($data->channel->item as $item)
    {
        
		
		
        $media = $item->children('http://search.yahoo.com/mrss/');
        $image = array();
        foreach($media->thumbnail[0]->attributes() as $key => $value) 
        {
            $image[$key] = (string)$value;
        }        
        
        $articles[] = array(
            'title' => (string)$item->title,
            'description' => (string)$item->description,
            'link' => (string)$item->link,
            'image' => $image,
			'pubDate'=> (string) $item->pubDate 
        );    
    }
    
 return $articles;

} 
$d = array_reverse(fetch_rss());

$dd = array_rand($d,5);
echo "<pre>";
 print_r($dd );
echo "</pre>";
die('-');

$url = "http://feeds.bbci.co.uk/news/world/rss.xml";
$rss = simplexml_load_file($url);

$data = $rss->xpath ('channel/item/media:thumbnail');
if($rss)
{
		echo '<h1>'.$rss->channel->title.'</h1>';
		echo '<li>'.$rss->channel->pubDate.'</li>';
		$items = $rss->channel->item;
		foreach($items as $item)
		{
			$title = $item->title;
			$link = $item->link;
			echo 'thumbnail->'.$img = $item->thumbnail;
			$published_on = $item->pubDate;
			$description = $item->description;
			
			echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
			$index = 1;
			foreach ($data as $item) {
				
				echo '<img src="'.$item['url'].'" />';
			 if($index==1){
			  break;	 
			 }	
			$index++;
			}
			echo '<span>('.$published_on.')</span>';
			echo '<p>'.$description.'</p>';
		
		}
}  

die();


		/*$newsoutput = new SimpleXMLElement('http://feeds.bbci.co.uk/news/world/rss.xml', LIBXML_NOCDATA, true);
		$newsoutput = json_decode(json_encode($newsoutput), TRUE);*/

//$url = "http://feeds.bbci.co.uk/news/world/rss.xml";
//$xml = simplexml_load_file($url);
//print_r($xml);
$movies = new SimpleXMLElement('http://feeds.bbci.co.uk/news/world/rss.xml', LIBXML_NOCDATA, true);

 $newsoutput = json_decode(json_encode($movies), TRUE) ;
//$feed = file_get_contents('http://feeds.bbci.co.uk/news/world/rss.xml');
//$feed = str_replace('<media:', '<', $feed);
//$rss = simplexml_load_file('http://feeds.bbci.co.uk/news/england/rss.xml');

/*foreach ($rss->channel->item as $item) {
    $media = $item->children('http://search.yahoo.com/mrss/');
    ...
}*/



echo "<pre>";
 print_r($newsoutput);
echo "</pre>";
die('-');

//http://feeds.bbci.co.uk/news/world/rss.xml

$a=array(41,41,32,30,31,25);
echo '<pre>';
print_r(array_unique($a));
die();


	$username = "simplyrets";
	$password = "simplyrets";
	//$remote_url = 'https://api.simplyrets.com/properties?type=farm';
	$remote_url = 'https://api.simplyrets.com/properties/openhouses?type=farm';
	
	$opts = array(
		'http'=>array(
		'method'=>"GET",
		'header' => "Authorization: Basic " . base64_encode("$username:$password")
		)
	);
	$context = stream_context_create($opts);
	$file = file_get_contents($remote_url, false, $context);
	json_decode($file);
	//print($file); arslan.dev231@gmail.com
	               //arslanupwrk231@#
echo "<pre>";
 print_r(json_decode($file));
echo "</pre>";

/* for($index = 1 ; $index <= 50; $index++)
 {
     for($counter = 1 ; $counter <= $index ; $counter++)
	 {
		 echo "*";
		 //echo "</br>"; 
	 }
	echo "</br>";	 
 }*/
 

die();

echo is_int(0);
echo "</br>";
echo is_numeric('0');
die();
unique();
echo base64_encode('https://www.w3schools.com/php/func_xml_utf8_encode.asp'); echo '</br>';
echo base64_decode(base64_encode('https://www.w3schools.com/php/func_xml_utf8_encode.asp'));
die();

$api_key = 'AIzaSyCpfWMKfe2_9VO80AfeAfqI3YmEr9DnWE8';
			$address = urlencode( 'Baba Naseer Road, Bahawalpur, Pakistan' );
			$get_file_data =  file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$address."&key=".$api_key);
			$decoded_get_file_data = json_decode( $get_file_data); 
			echo "<pre>";
			 print_r($decoded_get_file_data);
			echo "</pre>";
			
			die();
// test work



$a = array ('name'=>'arslan','name1'=>'arslan','name2'=>'arslan');
echo "<pre>";
 print_r(array_unique($a));
echo "</pre>";





echo .2*.2;
die();
function get_currency($from_Currency, $to_Currency, $amount) {
	    
		
	
		if($from_Currency==$to_Currency)
		{
		return urlencode($amount);
		}
		else
		{	
		$amount = urlencode($amount);
		$from_Currency = urlencode($from_Currency);
		$to_Currency = urlencode($to_Currency);
		 
		$url = "http://www.google.com/finance/converter?a=$amount&from=$from_Currency&to=$to_Currency";
		 
		$ch = curl_init();
		$timeout = 0;
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		 
		curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$rawdata = curl_exec($ch);
		curl_close($ch);
		@$data = explode('bld>', $rawdata);
		@$data = explode($to_Currency, $data[1]);
		return round($data[0], 0);
		}
}


echo get_currency('SAR','PKR',1);















?>