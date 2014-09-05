<?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.

if (file_exists('example.xml')) {
    $xml = simplexml_load_file('example.xml');
 
    print_r($xml);

//    echo $xml->songs->song->lyrics->lyric;

} else {
    exit('Cannot open example.xml!');
}
?>