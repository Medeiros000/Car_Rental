<?php

namespace App\Http\Controllers;

use App\Http\Repositories\RentalRepository;
use App\Models\Rental;
use App\Http\Requests\StoreRentalRequest;
use App\Http\Requests\UpdateRentalRequest;
use Illuminate\Http\Request;

class RentalController extends Controller
{

  protected $rental;

  /**
   * RentalController constructor.
   * @param Rental $rental
   */
  public function __construct(Rental $rental)
  {
    $this->rental = $rental;
  }

  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $rentalRepository = new RentalRepository($this->rental);

    if ($request->has('filter')) {
      $rentalRepository->filter($request->get('filter'));
    }

    if ($request->has('attributes')) {
      $rentalRepository->selectAttributes($request->get('attributes'));
    }

    return response()->json($rentalRepository->getResults(), 200);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreRentalRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $rental = $this->rental->find($id);
    if ($rental) {
      return response()->json($rental, 200);
    } else {
      return response()->json(['msg' => 'Rental not found'], 404);
    }
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateRentalRequest $request, $id)
  {
    $rental = $this->rental->find($id);
    if ($rental) {
      $rental->update($request->validated());
      return response()->json($rental, 200);
    } else {
      return response()->json(['msg' => 'Rental not found'], 404);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $rental = $this->rental->find($id);
    if ($rental) {
      $rental->delete();
      return response()->json(['msg' => 'Rental deleted'], 200);
    } else {
      return response()->json(['msg' => 'Rental not found'], 404);
    }
  }
}
