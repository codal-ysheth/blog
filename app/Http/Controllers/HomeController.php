<?php

namespace App\Http\Controllers;

/**
 *
 * @OA\Schema(schema="CreateInsertInput",
 *   @OA\Property(property="company_name",type="string"),
 *   @OA\Property(property="primary_contact_name",type="string"),
 *   @OA\Property(property="company_email",type="string"),
 *   @OA\Property(property="phone_ext",type="string"),
 *   @OA\Property(property="phone_no",type="string"),
 *   @OA\Property(property="role",type="string"),
 *   @OA\Property(property="is_served_by_consultant",
 *                     type="integer"),
 *   @OA\Property(property="consultant_id",type="integer"),
 *   @OA\Property(property="address_1",type="string"),
 *   @OA\Property(property="address_2",type="string"),
 *   @OA\Property(property="city",type="string"),
 *   @OA\Property(property="state",type="integer"),
 *   @OA\Property(property="zipcode",type="integer"),
 *   @OA\Property(property="user_logo",type="string"),
 * )
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * @OA\Get(
     *     tags={"Company Management"},
     *     path="/client",
     *     description="Returns all clients from the system",
     *     summary="list clients",
     *     operationId="ListClients",
     *     @OA\Parameter(
     *         description="Page Number",
     *         in="query",
     *         name="page",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             format="int32"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="parentId",
     *         in="query",
     *         description="Parent Id",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             format="int32"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="perpage",
     *         in="query",
     *         description="Maximum number of results to return",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             format="int32"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="filterActive",
     *         in="query",
     *         description="Filter on active boolean field",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             enum={"true","false"}
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="sortBy",
     *         in="query",
     *         description="Sort Key",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             format="varchar"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="type",
     *         in="query",
     *         description="If Sort key is integer",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             enum={"int"}
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="sortDirection",
     *         in="query",
     *         description="Sort direction to be ASC or DESC",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             enum={"ASC","DESC"}
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Search by client name or consultant name",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             format="varchar"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="filterKey",
     *         in="query",
     *         description="Filter by Key",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             enum={"clientFilter","consultantFilter"}
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="filterValue",
     *         in="query",
     *         description="Filter value for status",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             enum={"Active","Pending","Locked","Disable"}
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="User response",
     *         @OA\Schema(ref="#/components/schemas/UserList")
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="Validation error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Not Authorized Invalid or missing Authorization header",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Not Authorized Invalid or missing Authorization header",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Unexpected error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
     *     ),
     *     security={
     *         {"API-Key": {}}
     *     }
     * )
     */
    public function index()
    {
        return view('home');
    }
}
