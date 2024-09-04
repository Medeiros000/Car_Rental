<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
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
	 */
	public function index()
	{
		$brands = $this->brand->all();
		return response()->json($brands, 200);
	}

	/**
	 * Store a newly created resource in storage.
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
