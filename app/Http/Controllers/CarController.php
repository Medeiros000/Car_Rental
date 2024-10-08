<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{

	protected $car;

	/**
	 * CarController constructor.
	 * @param Car $car
	 */
	public function __construct(Car $car)
	{
		$this->car = $car;
	}

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$car = $this->car->all();
		return response()->json($car, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreCarRequest $request)
	{
		$car = $this->car->create($request->validated());
		return response()->json($car->all(), 201);
	}

	/**
	 * Display the specified resource.
	 * 
	 * @param int $id
	 * @return Car
	 */
	public function show($id)
	{
		$car = $this->car->find($id);
		if ($car) {
			return response()->json($car, 200);
		} else {
			return response()->json(['msg' => 'Car not found'], 404);
		}
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateCarRequest $request, $id)
	{
		$car = $this->car->find($id);
		if ($car) {
			$car->update($request->validated());
			return response()->json($car, 200);
		} else {
			return response()->json(['msg' => 'Car not found'], 404);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		$car = $this->car->find($id);
		if ($car) {
			$car->delete($car);
			return response()->json($car, 200);
		} else {
			return response()->json(['msg' => 'Car not found'], 404);
		}
	}
}
