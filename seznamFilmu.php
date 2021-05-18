<?php
$filepath = 'https://raw.githubusercontent.com/algolia/examples/master/demo-personalization/data.json';
$json_string = file_get_contents($filepath);
$json = json_decode($json_string, false);

foreach ($json as $nazev) {
 echo ($nazev->title . PHP_EOL);
 
}


