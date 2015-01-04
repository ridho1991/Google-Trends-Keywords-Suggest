<html>
 <head>
 <title><?php echo $_GET['name'];;?></title>
<meta charset="UTF-8">
</head> 
<body>
<?php
require_once('includes.php');
require_once('keywords_suggest.php');
ini_set('max_execution_time', 0);
ini_set('memory_limit', '999M');

$country_code=$_GET['code'];
$country_name=$_GET['name'];

//Setting
$keyword_suggest='no'; // yes or no

//Only work if keyword_suggest = yes.
$google_suggest='yes'; // yes or no
$yahoo_suggest='no'; // yes or no
$bing_suggest='no'; // yes or no
//End Setting

$googletrend=fetch_trends($country_code);
echo '<hr>';
echo $country_name.'<br><hr>';
foreach($googletrend as $trend)
{
	echo $trend.'<br>';
}

if($keyword_suggest=='yes'){
	echo '<br><hr>';
	echo 'Keywords Suggest<br><hr>';
	$keywords=array();
	foreach($googletrend as $trend)
	{
		$trend=urlencode($trend);
		
		//Google Suggest
		if($google_suggest=='yes'){
			$google_key=google_suggest($trend);
			foreach($google_key as $key){
				$keywords[]=$key;
			}
		}
		//End Google Suggest
		
		//Yahoo Suggest
		if($yahoo_suggest=='yes'){
			$yahoo_key=yahoo_suggest($trend);
			$keywords=$yahoo_key;
			foreach($yahoo_key as $key){
				$keywords[]=$key;
			}
		}
		//End Yahoo Suggest
		
		//Bing Suggest
		if($bing_suggest=='yes'){
			$bing_key=bing_suggest($trend);
			$keywords=$bing_key;
			foreach($bing_key as $key){
				$keywords[]=$key;
			}
		}
		//End Bing Suggest
	}
	$keywords=array_unique($keywords);
	foreach($keywords as $key){
		echo $key.'<br>';
	}
}
?>
</body>
</html>