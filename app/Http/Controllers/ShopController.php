<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopRequest;
use App\Http\Requests\ShopUpdateRequest;
use App\Http\Resources\ShopResource;
use App\Models\Shops;
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
        $models = ShopResource::collection(Shops::paginate(4));
        return response()->json($models);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShopRequest $request
     * @return JsonResponse
     */
    public function store(ShopRequest $request): JsonResponse
    {
        $model = new Shops();
        $status = $model->fill($request->validated())->save();
        return response()->json($status);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(Shops $shop)
    {
        return response()->json($shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShopUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(ShopUpdateRequest $request, int $id): JsonResponse
    {
        $model = Shops::findOrFail($id);

        if ($model->update($request->validated())) {
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
    public function destroy(Shops $shop): JsonResponse
    {
        return response()->json($shop->delete());
    }
}
