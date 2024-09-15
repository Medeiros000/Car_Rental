<?php

namespace App\Http\Controllers;

use App\Http\Repositories\BrandRepository;
use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{

	protected $brand;

	/**
	 * BrandController constructor.
	 * @param Brand $brand
	 */
	public function __construct(Brand $brand)
	{
		$this->brand = $brand;
	}

	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(Request $request)
	{
		$brandRepository = new BrandRepository($this->brand);

		if ($request->has('car_model_attributes')) {
			$car_model_attributes = 'car_models:id,' . $request->get('car_model_attributes');
			$brandRepository->selectAttributesRelationship($car_model_attributes);
		} else {
			$brandRepository->selectAttributesRelationship('car_models');
		}

		if ($request->has('filter')) {
			$brandRepository->filter($request->get('filter'));
		}

		if ($request->has('attributes')) {
			$brandRepository->selectAttributes($request->get('attributes'));
		}

		return response()->json($brandRepository->getResults(), 200);
	}

	/**
	 * Store a newly created resource in storage.
	 * @param StoreBrandRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(StoreBrandRequest $request)
	{
		$image = $request->file('image');
		$image_urn = $image->store('images', 'public');

		$brand = $this->brand->create([
			'name' => $request->name,
			'image' => $image_urn,
		]);
		return response()->json($brand, 201);
	}

	/**
	 * Display the specified resource.
	 * 
	 * @param int $id
	 * @return Brand
	 */
	public function show($id)
	{
		$brand = $this->brand->find($id);
		if (!$brand) {
			return response()->json(['msg' => 'Brand not found'], 404);
		}
		return $brand;
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateBrandRequest $request, $id)
	{
		$brand = $this->brand->find($id);
		if (!$brand) {
			return response()->json(['msg' => 'Brand not found'], 404);
		}
		if ($request->file('image')) {
			Storage::disk('public')->delete($brand->image);
		}
		$image = $request->file('image');
		$image_urn = $image->store('images', 'public');

		$brand->update([
			'name' => $request->name,
			'image' => $image_urn,
		]);
		return response()->json($brand, 200);
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($id)
	{
		$brand = $this->brand->find($id);

		if (!$brand) {
			return response()->json(['msg' => 'Brand not found'], 404);
		}

		Storage::disk('public')->delete($brand->image);
		$brand->delete();
		return response()->json(['msg' => 'Brand deleted'], 200);
	}
}
