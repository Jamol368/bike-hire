<?php

namespace App\Http\Controllers;

use App\Contracts\ActionContract;
use App\Http\Requests\ShopRequest;
use App\Http\Requests\ShopUpdateRequest;
use App\Http\Resources\ShopResource;
use App\Models\Shop;
use Illuminate\Http\JsonResponse;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $models = ShopResource::collection(Shop::all());
        return response()->json($models);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShopRequest $request
     * @param ActionContract $action
     * @return JsonResponse
     */
    public function store(ShopRequest $request, ActionContract $action): JsonResponse
    {
        return response()->json($action->handle($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(Shop $shop)
    {
        return response()->json($shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShopUpdateRequest $request
     * @param Shop $shop
     * @return JsonResponse
     */
    public function update(ShopUpdateRequest $request, Shop $shop): JsonResponse
    {
        if ($shop->update($request->validated())) {
            return response()->json(true);
        }

        return response()->json(false);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(Shop $shop): JsonResponse
    {
        return response()->json($shop->delete());
    }
}
