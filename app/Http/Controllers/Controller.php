<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function successResponse($message, $code = 200)
    {
        return response()->json([
            'code' => $code,
            'status'=> 'success',
            'message' => $message,
            // 'data' => $data
        ], $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json([
            'status'=>'error',
            'message' => $message,
            'code' => $code,
            'data' => null
        ], 200);
    }
}
