<?php
function fetch_trends($country_code)
    {
		$trendsurl = "http://www.google.com/trends/hottrends/atom/hourly?pn=".$country_code."";
		$c = curl_init($trendsurl);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		$responsedata = curl_exec($c);
		curl_close($c);
		return parse_trend_feed( $responsedata );
    }

function parse_trend_feed($data)
    {
		preg_match_all('/.+?<a href=".+?">(.+?)<\/a>.+?/',$data,$matches);
		return $matches[1];
    }
?>