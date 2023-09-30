<?php

namespace App\Http\Controllers;

use App\Models\SubConsumption;
use App\Models\Inventory;
use Illuminate\Http\Request;

class SubConsumptionController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'consumption_id' => 'required',
            'qtyConsumed' => 'required|integer',
            'dateConsumed' => 'required|date',
        ]);

        SubConsumption::create($fields);

        return redirect()->route('consumptions.index')->with('success', 'Subconsumption data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubConsumption $subconsumption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubConsumption $subconsumption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubConsumption $subconsumption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubConsumption $subconsumption)
    {
        //
    }
}
