<?php
defined('BASEPATH') or exit('No direct script access allowed');

function response_ajax($result)
{
    Header('Access-Control-Allow-Origin: http://xampp.local'); //for allow http://xampp.local
    Header('Access-Control-Allow-Headers: http://xampp.local'); //for allow http://xampp.local
    Header('Access-Control-Allow-Methods: GET, POST'); //method GET, POST allowed
    Header('Content-Type: application/json');
    echo json_encode([
        "data" => [
            "result" => $result
        ]
    ]);
    die;
}
