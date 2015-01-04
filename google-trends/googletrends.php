<html>
 <head>
 <title>All Countries</title>
<meta charset="UTF-8">
</head> 
<body>
<?php
require_once('includes.php');
ini_set('max_execution_time', 0);
ini_set('memory_limit', '999M');

$country_code=array('p30','p8','p44','p41','p18','p13','p38','p32','p43','p49','p29','p50','p16','p15','p48','p10','p45','p3','p19','p6','p27','p4','p37','p34','p21','p17','p52','p51','p25','p31','p47','p39','p14','p36','p5','p40','p23','p26','p42','p46','p12','p33','p24','p35','p9','p1','p28');

$googletrend=array();
echo '<hr>';
echo 'All Countries<br><hr>';
foreach($country_code as $code)
	{
		$googletrend=fetch_trends($code);
		foreach($googletrend as $trend)
		{
			echo $trend.'<br>';
		}
	}

?>
</body>
</html>