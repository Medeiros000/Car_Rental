<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;
use Illuminate\Support\Facades\Storage;

class CarModelController extends Controller
{

	protected $carModel;

	/**
	 * CarModelController constructor.
	 * @param CarModel $carModel
	 */
	public function __construct(CarModel $carModel)
	{
		$this->carModel = $carModel;
	}

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return response()->json($this->carModel->all());
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreCarModelRequest $request)
	{
		$image = $request->file('image');
		$image_urn = $image->store('images/modelos', 'public');

		$carModel = $this->carModel->create([
			'brand_id' => $request->brand_id,
			'name' => $request->name,
			'image' => $image_urn,
			'doors_number' => $request->doors_number,
			'seats' => $request->seats,
			'air_bag' => $request->air_bag,
			'abs' => $request->abs
		]);

		return response()->json($carModel, 201);
	}

	/**
	 * Display the specified resource.
	 * @param int $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		$carModel = $this->carModel->find($id);
		if (!$carModel) {
			return response()->json(['error' => 'Car model not found'], 404);
		}
		return response()->json($carModel);
	}

	/**
	 * Update the specified resource in storage.
	 * @param UpdateCarModelRequest $request
	 * @param int $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update(UpdateCarModelRequest $request, $id)
	{
		$carModel = $this->carModel->find($id);
		if (!$carModel) {
			return response()->json(['error' => 'Car model not found'], 404);
		}
		if ($request->file('image')) {
			Storage::disk('public')->delete($carModel->image);
		}
		$image = $request->file('image');
		$image_urn = $image->store('images/modelos', 'public');

		$carModel->update([
			'brand_id' => $request->brand_id,
			'name' => $request->name,
			'image' => $image_urn,
			'doors_number' => $request->doors_number,
			'seats' => $request->seats,
			'air_bag' => $request->air_bag,
			'abs' => $request->abs
		]);
		return response()->json($carModel);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		$carModel = $this->carModel->find($id);

		if (!$carModel) {
			return response()->json(['error' => 'Car model not found'], 404);
		}

		Storage::disk('public')->delete($carModel->image);
		$carModel->delete();
		return response()->json(['msg' => 'Car model deleted'], 200);
	}
}
