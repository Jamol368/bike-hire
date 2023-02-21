<?php

namespace App\Http\Controllers;

use App\Http\Requests\BikeCategoryRequest;
use App\Http\Requests\BikeCategoryUpdateRequest;
use App\Http\Resources\BikeCategoryResource;
use App\Models\BikeCategory;
use Illuminate\Http\JsonResponse;

class BikeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $models = BikeCategoryResource::collection(BikeCategory::paginate(4));
        return response()->json($models);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BikeCategoryRequest $request
     * @return JsonResponse
     */
    public function store(BikeCategoryRequest $request): JsonResponse
    {
        $model = new BikeCategory();
        $status = $model->fill($request->validated())->save();
        return response()->json($status);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(BikeCategory $bikeCategory)
    {
        return response()->json($bikeCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BikeCategoryUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(BikeCategoryUpdateRequest $request, int $id): JsonResponse
    {
        $model = BikeCategory::findOrFail($id);

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
    public function destroy(BikeCategory $bikeCategory): JsonResponse
    {
        return response()->json($bikeCategory->delete());
    }
}
