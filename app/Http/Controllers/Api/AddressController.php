<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $address = Address::where('user_id', $request->user()->id)->get();

        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => 'Get address success',
            'data' => $address,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $address = Address::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'subdistrict_id' => $request->subdistrict_id,
            'postal_code' => $request->postal_code,
            'full_address' => $request->full_address,
            'is_default' => false,
        ]);

        // Mengembalikan respons JSON
        if ($address) {
            return response()->json([
                'code' => 201,
                'success' => true,
                'message' => 'Address created successfully',
                'data' => $address,
            ], 201);
        } else {
            return response()->json([
                'code' => 400,
                'success' => false,
                'message' => 'Address creation failed',
            ], 400);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
