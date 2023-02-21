<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function respondSuccess($status, $message, $content = null)
    {
        return response()->json([


            'status' => $status,
            'message' => $message,
            'data' => $content

        ]);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondError($status, $message)
    {
        return response()->json([


            'status' => $status,
            'message' => $message,
            'data' => null,
        ]);
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
