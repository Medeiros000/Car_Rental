<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CostumerRepository;
use App\Models\Costumer;
use App\Http\Requests\StoreCostumerRequest;
use App\Http\Requests\UpdateCostumerRequest;
use Illuminate\Http\Request;

class CostumerController extends Controller
{

  protected $costumer;

  /**
   * CostumerController constructor.
   * @param Costumer $costumer
   * @return void
   */
  public function __construct(Costumer $costumer)
  {
    $this->costumer = $costumer;
  }

  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $costumerRepository = new CostumerRepository($this->costumer);

    if ($request->has('filter')) {
      $costumerRepository->filter($request->get('filter'));
    }

    if ($request->has('attributes')) {
      $costumerRepository->selectAttributes($request->get('attributes'));
    }

    return response()->json($costumerRepository->getResults(), 200);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreCostumerRequest $request)
  {
    $costumer = $this->costumer->create($request->validated());

    return response()->json($costumer, 201);
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $costumer = $this->costumer->find($id);
    if ($costumer) {
      return response()->json($costumer, 200);
    } else {
      return response()->json(['msg' => 'Costumer not found'], 404);
    }
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCostumerRequest $request, $id)
  {
    $costumer = $this->costumer->find($id);
    if ($costumer) {
      $costumer->update($request->validated());
      return response()->json($costumer, 200);
    } else {
      return response()->json(['msg' => 'Costumer not found'], 404);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $costumer = $this->costumer->find($id);
    if ($costumer) {
      $costumer->delete();
      return response()->json(['msg' => 'Costumer deleted'], 200);
    } else {
      return response()->json(['msg' => 'Costumer not found'], 404);
    }
  }
}
