<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CustomerRepository;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

  protected $customer;

  /**
   * CustomerController constructor.
   * @param Customer $customer
   * @return void
   */
  public function __construct(Customer $customer)
  {
    $this->customer = $customer;
  }

  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $customerRepository = new CustomerRepository($this->customer);

    if ($request->has('filter')) {
      $customerRepository->filter($request->get('filter'));
    }

    if ($request->has('attributes')) {
      $customerRepository->selectAttributes($request->get('attributes'));
    }

    return response()->json($customerRepository->getResults(), 200);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreCustomerRequest $request)
  {
    $customer = $this->customer->create($request->validated());

    return response()->json($customer, 201);
  }

  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $customer = $this->customer->find($id);
    if ($customer) {
      return response()->json($customer, 200);
    } else {
      return response()->json(['msg' => 'Customer not found'], 404);
    }
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCustomerRequest $request, $id)
  {
    $customer = $this->customer->find($id);
    if ($customer) {
      $customer->update($request->validated());
      return response()->json($customer, 200);
    } else {
      return response()->json(['msg' => 'Customer not found'], 404);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $customer = $this->customer->find($id);
    if ($customer) {
      $customer->delete();
      return response()->json(['msg' => 'Customer deleted'], 200);
    } else {
      return response()->json(['msg' => 'Customer not found'], 404);
    }
  }
}
