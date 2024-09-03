<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Response;

class CarController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return response()->json([
			'cars' => 'test',
			'status' => 'success'
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		// Retorna uma resposta JSON com código 201 Created
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreCarRequest $request)
	{
		// dd($request->all());
		
		return response()->json($request->all(), 201);
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Car $car)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Car $car)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateCarRequest $request, Car $car)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Car $car)
	{
		//
	}
}
