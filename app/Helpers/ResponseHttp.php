<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ResponseHttp
{
    public static function responseSuccess($data, int $status): JsonResponse
    {
        return response()->json([
            "data" => [$data],
            "error" => []
        ], $status);
    }

    public static function responseError($data, int $status): JsonResponse
    {
        return response()->json([
            "data" => [],
            "error" => ["messages"=>$data]
        ], $status);
    }
}