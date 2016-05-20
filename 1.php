<?php
$string = <<<XML
<a>
	<div id = "sent" data="100"></div>
</a>
XML;

$xml = simplexml_load_string($string);
	$count = 1;
foreach($xml->div[0]->attributes() as $a => $b) {
	if($count%2 == 0) 
     echo $b;
 $count++;
}
?>