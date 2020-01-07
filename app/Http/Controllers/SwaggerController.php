<?php

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="SimplyStormWater REST service",
 *     @OA\Contact(name="SimplyStormWater", url="http://app.SimplyStormWater.com")
 * )
 * @OA\Server(
 *     description="Local Server",
 *     url="http://local.blog.com/api/"
 * )
 */
/**
 *
 * @OA\Schema(schema="SuccessResponse",
 *     @OA\Property(property="data", type="array", @OA\Items()),
 *     @OA\Property(property="message", type="string"),
 * )
 */
/**
 *
 * @OA\Schema(schema="ErrorResponse",
 *     @OA\Property(property="file", type="string"),
 *     @OA\Property(property="line", type="string"),
 *     @OA\Property(property="code", type="string"),
 *     @OA\Property(property="message", type="string"),
 *     @OA\Property(property="trace", type="string"),
 *     @OA\Property(property="response", type="array", @OA\Items(type="string"))
 * )
 */

/**
 * @OA\Schema(schema="PagingData",
 *     @OA\Property(property="current_page", type="integer", format="int64"),
 *     @OA\Property(property="last_page", type="integer", format="int64"),
 *     @OA\Property(property="per_page", type="integer", format="int64"),
 *     @OA\Property(property="total", type="integer", format="int64"),
 *     @OA\Property(property="last_page_url", type="string"),
 *     @OA\Property(property="next_page_url", type="string"),
 *     @OA\Property(property="prev_page_url", type="string")
 * )
 */

/**
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     securityScheme="API-Key",
 *     name="Authorization"
 * )
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{
    public function __construct()
    {
    }

    public function listItem(Request $request, $parentId = null)
    {
        $swagger = \OpenApi\scan(base_path('app/'));
        return response()->json($swagger);
    }
}
