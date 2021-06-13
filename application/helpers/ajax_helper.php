<?php
defined('BASEPATH') or exit('No direct script access allowed');

function setup_ajax()
{
    Header('Access-Control-Allow-Origin: http://xampp.local'); //for allow http://xampp.local
    Header('Access-Control-Allow-Headers: http://xampp.local'); //for allow http://xampp.local
    Header('Access-Control-Allow-Methods: GET, POST'); //method GET, POST allowed
    Header('Content-Type: application/json');
}
