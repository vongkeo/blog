<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    // response  Data
    public static function output($data = [], $msg = 'success', $code = 200, $status = True)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // response Not found
    public static function notFound($data = [], $msg = 'data not found', $code = 404, $status = false)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // response Bad Request
    public static function badRequest($data = [], $msg = 'invalid request', $code = 400, $status = false)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // response success
    public static function success($data = [], $msg = 'success', $code = 200, $status = true)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // response error
    public static function error($data = [], $msg = 'internal server error', $code = 500, $status = false)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // response Exist data
    public static function alreadyExist($data = [], $msg = 'request duplicated', $code = 409, $status = false)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // response Exist data
    public static function notSupported($data = [], $msg = 'method not allowed', $code = 405, $status = false)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }

    // unauthorization
    public static function unAuthorizarion($data = [], $msg = 'unauthorized', $code = 405, $status = false)
    {
        return
            [
                'code' => $code,
                'status' => $status,
                'message' => $msg,
                'data' => $data,

            ];
    }
}
