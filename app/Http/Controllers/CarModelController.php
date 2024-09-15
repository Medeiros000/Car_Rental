<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CarModelRepository;
use App\Models\CarModel;
use App\Http\Requests\StoreCarModelRequest;
use App\Http\Requests\UpdateCarModelRequest;
use Illuminate\Http\Request;
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
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(Request $request)
	{
		$car_model_repository = new CarModelRepository($this->carModel);

		if ($request->has('brand_attributes')) {
			$car_model_attributes = 'brand:id,'. $request->get('brand_attributes');
			$car_model_repository->selectAttributesRelationship($car_model_attributes);
		} else {
			$car_model_repository->selectAttributesRelationship('brand');
		}

		if ($request->has('filter')) {
			$car_model_repository->filter($request->get('filter'));
		}

		if ($request->has('attributes')) {
			$car_model_repository->selectAttributes($request->get('attributes'));
		}

		return response()->json($car_model_repository->getResults(), 200);
	}

	/**
	 * Store a newly created resource in storage.
	 * @param StoreCarModelRequest $request
	 * @return \Illuminate\Http\JsonResponse
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
		return response()->json($carModel, 200);
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
		return response()->json($carModel, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 * @param int $id
	 * @return \Illuminate\Http\JsonResponse
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
