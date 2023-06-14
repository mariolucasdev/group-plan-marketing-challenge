<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplianceRequest;
use App\Models\Appliance;
use Illuminate\Http\{JsonResponse, Request};

class ApplianceController extends Controller
{
    /**
     * List appliances json
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $appliance = Appliance::all();

        return response()->json($appliance, 200);
    }

   /**
    * Store appliance
    *
    * @param StoreApplianceRequest $request
    * @return JsonResponse
    */
    public function store(StoreApplianceRequest $request): JsonResponse
    {
        $appliance = Appliance::create($request->all());

        return response()->json($appliance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update appliance
     *
     * @param StoreApplianceRequest $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(StoreApplianceRequest $request, string $id): JsonResponse
    {
        $appliance = Appliance::findOrFail($id);
        $appliance->update($request->all());

        return response()->json($appliance, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
