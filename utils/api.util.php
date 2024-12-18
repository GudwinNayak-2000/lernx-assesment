<?php

class APIUtil
{


    private static function getStatusCodeResponse($code)
    {
        $status = array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error',
        );
        return ($status[$code]) ? $status[$code] : $status[500];
    }

    public static function setHeaders(
        $contentType = 'application/json',
        $accessControlAllowOrigin = '*',
        $accessControlAllowMethods = 'GET, POST, PUT, DELETE, PATCH',
        $accessControlMaxAge = 3600,
        $accessControlAllowHeaders = 'Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With'
    ) {
        header("Content-Type: $contentType");
        header("Access-Control-Allow-Origin: $accessControlAllowOrigin");
        header("Access-Control-Allow-Methods: $accessControlAllowMethods");
        header("Access-Control-Max-Age: $accessControlMaxAge");
        header("Access-Control-Allow-Headers: $accessControlAllowHeaders");

        $methods = explode(',', $accessControlAllowMethods);

        if (
            !in_array($_SERVER['REQUEST_METHOD'], $methods)
        ) {
            self::setMethodNotAllowed();
        }
    }
    public static function setMethodNotAllowed()
    {
        header('HTTP/1.1 405 Method Not Allowed');
        echo json_encode(array(
            "error" => true,
            "status" => 405,
            'message' => 'This request method is not allowed!!'
        ));
        exit();
    }

    public static function sendJSONResponse($data, $error = false, $status = 200, $message = 'Success')
    {
        header('HTTP/1.1 ' . $status . ' ' . self::getStatusCodeResponse($status));

        echo json_encode(array(
            'data' => $data,
            "error" => $error,
            "status" => $status,
            'message' => $message,
        ));
    }
}
