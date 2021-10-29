<?php

header('Access-Control-Allow-Origin: *');

header('Content-type: application/json');

global $base_url;
$base_url = "http://localhost/mass/";

function imagecheck($rtdata) {
    if ($rtdata == '') {
        $data = "";
    } else {
        $data = $GLOBALS['base_url'] . 'image/' . $rtdata;
    }
    return $data;
}

?>