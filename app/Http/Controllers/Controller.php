<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function respondSuccess($result, $message, $code = 200)
    {
        $response = [
            'code' =>$code,
            'status' => true,
            'message' => $message,
            'data'    => $result,
            'errorData' =>null,
        ];


        return response()->json($response, $code);
    }


    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondError($error, $errorMessages = [], $code )
    {
        $response = [
            'code' =>$code,
            'status' => false,
            'message' => $error,
            'data'=>null,
        ];


        if(!empty($errorMessages)){
            $response['errorData'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

    public function respondwarning($result, $message, $errorMessages, $code = 200)
    {
        $response = [
            'code' => $code,
            'status' => false,
            'message' => $message,
            'data' => $result,
        ];


        if (!empty($errorMessages)) {
            $response['errorData'] = $errorMessages;
        }


        return response()->json($response, 200);
    }
}
