<html>
 <head>
<meta charset="UTF-8">
<title>Grab Google Trends</title>
</head> 
<body>
<?php
$country_code=array('p30','p8','p44','p41','p18','p13','p38','p32','p43','p49','p29','p50','p16','p15','p48','p10','p45','p3','p19','p6','p27','p4','p37','p34','p21','p17','p52','p51','p25','p31','p47','p39','p14','p36','p5','p40','p23','p26','p42','p46','p12','p33','p24','p35','p9','p1','p28');

$country_name=array(
'Argentina','Australia','Austria','Belgium','Brazil','Canada','Chile','Colombia','Czech Republic','Denmark','Egypt','Finland','France','Germany','Greece','Hong Kong','Hungary','India','Indonesia','Israel','Italy','Japan','Kenya','Malaysia','Mexico','Netherlands','Nigeria','Norway','Philippines','Poland','Portugal','Romania','Russia','Saudi Arabia','Singapore','South Africa','South Korea','Spain','Sweden','Switzerland','Taiwan','Thailand','Turkey','Ukraine','United Kingdom','United States','Vietnam');

echo '<ol>';
echo '<li><a target="_blank" href="/googletrends/googletrends.php">All Countries</a></li>';
$x=0;
for($x=0;$x<47;$x++){
echo '<li><a target="_blank" href="/googletrends/googletrend.php?code='.$country_code[$x].'&name='.$country_name[$x].'">'.$country_name[$x].'</a></li>';
}
echo '</ol>';
?>
</body>
</html>