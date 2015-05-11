<?php
/*
$url = "http://jobs.jobstreet.com/ph/jobs/5573655/sources/3?fr=21&src=46&srcr=12";

$contents = strip_tags(file_get_contents($url));

//echo $contents



//$url = $_GET['url'];
//$contents = strip_tags(file_get_contents($url));
//$start = strpos($contents,'DESIGN')+6;
//$end = strpos($contents, 'Applications Applications');

$start = strpos($contents,'calling')+6;
$end = strpos($contents, 'experts');

$result = substr($contents, $start, $end-$start);
$var = htmlspecialchars($result);

echo $var;
*/
$url = "http://www.micromaxinfo.com/mobiles/smartphones/canvas/a116-canvas-hd";
$model = "a116-canvas-hd";

$contents = strip_tags(file_get_contents($url));
$start = strpos($contents,'DESIGN')+6;
$end = strpos($contents, 'Applications Applications');
$result = substr($contents, $start, $end-$start);
$var = htmlspecialchars($result);
$var = "Model : ".$model." ".$var."\n";
echo $var;




?>