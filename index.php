<?php

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

$url = 'https://raw.githubusercontent.com/djesenko/test/master/templates.json';
$obj = file_get_contents($url);
$obj = str_replace("CT_TAG_DEV_TOOLS", $queries['CT_TAG_DEV_TOOLS'] , $obj);

header('Content-Type: application/json');

echo $obj;

?>