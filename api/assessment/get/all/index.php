<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../../../../utils/api.util.php";

APIUtil::setHeaders(
    'application/json',
    '*',
    'GET',
    3600,
    'Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With'
);

include_once "../../../../configs/dbConnect.php";
include_once "../../../../models/models.php";

$response = Mongo::find(
    'assessments',
    []
);

APIUtil::sendJSONResponse(
    $response,
    false,
    200,
    'Success'
);
