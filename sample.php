<?php
$xml_doc = new DOMDocument();
$xml_doc->load('sample.xml');

print $xml_doc->saveXML(); echo "<br>-----------<br>";
  
$i = $xml_doc->documentElement;
foreach ($i->childNodes AS $item) {
	print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
echo "<br>-----------> nodeName 출력<br>";

$xpath = new DOMXpath($xml_doc);
$nodes = $xpath->query('//*');

$names = array();
foreach ($nodes as $node)
{
    $names[] = $node->nodeName;
}

echo join(PHP_EOL, array_unique($names)); echo "<br>";
print_r($names);
?>