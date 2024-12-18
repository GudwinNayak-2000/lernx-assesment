<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "../../../utils/api.util.php";

APIUtil::setHeaders(
    'application/json',
    '*',
    'GET',
    3600,
    'Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With'
);


$HTTP_GET_REQUESTDATA = json_decode(file_get_contents("php://input")) ?? $_GET;

if (
    !isset($HTTP_GET_REQUESTDATA->test)
    && !isset($_GET['test'])
) {

    APIUtil::sendJSONResponse(
        null,
        true,
        400,
        'Invalid Test Name!!'
    );

    exit();
}

if (
    !isset($HTTP_GET_REQUESTDATA->ctg)
    && !isset($_GET['ctg'])
) {

    APIUtil::sendJSONResponse(
        null,
        true,
        400,
        'Invalid Test CTG!!'
    );
}

$ctg = isset($HTTP_GET_REQUESTDATA->ctg) ? $HTTP_GET_REQUESTDATA->ctg : $_GET['ctg'];
$testName = isset($HTTP_GET_REQUESTDATA->test) ? $HTTP_GET_REQUESTDATA->test : $_GET['test'];

$testName = ucwords(str_replace('-', ' ', $testName));

include_once "../../../configs/dbConnect.php";
include_once "../../../models/models.php";



$response = Mongo::findOne(
    'assessments',
    array(
        'name' => $testName,
        'category.name' => $ctg
    )
);


APIUtil::sendJSONResponse(
    $response ? $response[0] : null,
    $response ? false : true,
    $response ? 200 : 404,
    $response ? 'Success' : 'No Data Found!!'
);
