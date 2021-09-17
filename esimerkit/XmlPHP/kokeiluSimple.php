<?php
$xml = simplexml_load_file("books.xml");
echo $xml->getName() . "<br />";
foreach($xml->children() as $child) {
    //var_dump($child);
    //echo $child["lahettaja")];
	echo $child->getName() . " : " . $child . "<br />";
}
?> 