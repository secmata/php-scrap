<?php
/*
$contents = file_get_contents('http://www.micromaxinfo.com/mobiles/smartphones/canvas/a116-canvas-hd');

if($contents === false)
	print 'FALSE';
print_r(htmlentities($contents));
*/

header('content-type: text/plain');
$contents = file_get_contents('http://www.micromaxinfo.com/mobiles/smartphones/canvas/a116-canvas-hd');
$contents = preg_replace('/\s(l,)/', '', $contents);

print $contents . "\n";

$records = preg_split('/class="master/', $contents);

//print count($records) . "\n";
//print_r($records)

for($ix=1; $ix < count($records); $ix++){
	$tmp = $records[$ix];
	
	print $tmp . "\n";
	exit();
}

//2





























?>