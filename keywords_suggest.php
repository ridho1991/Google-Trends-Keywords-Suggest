<?php
function google_suggest($query) {
		$xml = simplexml_load_file ( utf8_encode ( "http://www.google.com/complete/search?output=toolbar&hl=en&q=" . $query . "" ) );
		$suggest=array();
		if (@$xml) {
			foreach ( $xml->children () as $child ) {
				foreach ( $child->suggestion->attributes () as $data ) {
					$suggest [] = $data;
				}
			}
			return $suggest;
		}
	}
	
function yahoo_suggest($query) {
		$geturl = file_get_contents ( utf8_encode ( "http://sugg.search.yahoo.com/sg/?output=json&nresults=100&command=" . $query . "" ) );
		$keywords = json_decode ( $geturl, 1 );
		$suggest=array();
		foreach ( $keywords ['gossip'] ['results'] as $keys ) {
			$suggest [] = $keys['key'];
		}
		return $suggest;
	}
	
function bing_suggest($query) {
		$geturl = file_get_contents ( utf8_encode ( "http://api.bing.com/osjson.aspx?query=" . $query . "" ) );
		$keywords = json_decode ( $geturl, 1 );
		$suggest=array();
		if(isset($keywords[0])) {
            $z = 1;
            foreach($keywords[1] as $keys) {
                $suggest [] = $keys;
                $z++;
            }
        }
		return $suggest;
	}
?>