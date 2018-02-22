<?php
function about($request, $response) {
    $data = array(
        "status" => "ok",
        "data" => array(
        "Name"=>"ClanITS Backend",
        "Version"=>"0.0.1a",
        "Released"=> "15/02/2018"
    )
);
    $json = json_encode($data);
    return $json;
}
?>