<?php
	$doc = new DOMDocument();
	$xml = simplexml_load_file("lipsus.xml", "SimpleXMLElement", LIBXML_NOCDATA);
	$nodes = $xml->xpath("//report/news/content");
	//print_r($nodes);
	foreach($nodes as $child) {
		echo $child->date . "<br>";
		echo $child->title . "<br>";
		echo $child->title['path'] . "<br>";
		echo $child->title['urlshort'] . "<br>";
		echo $child->teaser . "<br>";
		echo $child->thumb . "<br>";
		echo $child->photo . "<br><br>";
	}
	/*
	foreach ($report as $q) {
	    foreach($q->childNodes as $child) {
	       		echo $child;
	       if ($child->nodeType == XML_CDATA_SECTION_NODE) {
	            echo $child->textContent . "<br/>";
	        }
	    }
	}*/
?>