<?php
return ['brands' => [
  [
    'id'          => 'list',
    'name'        => 'List Brands',
    'endpoint'    => 'GET /brands',
    'description' => 'Returns a list of brands.',
    'params'      => [
      'name (optional)'       => 'Name of the brand to be filtered.',
      'created_at'            => 'Creation date of the brand.',
      'updated_at'            => 'Update date of the brand.',
      'filter (optional)'     => 'Filters to be applied.',
      'attributes (optional)' => 'Specific attributes of the brands to be selected.'
    ],
    'request'     => null,
    'response'    => '    {"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'store',
    'name'        => 'Create New Brand',
    'endpoint'    => 'POST /brands',
    'description' => 'Stores a new brand.',
    'params'      => [
      'name (required)' => 'Name of the brand.',
      'image (optional)'   => 'Image of the brand.'
    ],
    'request'     => '{"name": "fiat","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
    'response'    => '{"id": 2,"name": "fiat","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'show',
    'name'        => 'Show Specific Brand',
    'endpoint'    => 'GET /brands/{id}',
    'description' => 'Displays a specific brand.',
    'params'      => [
      'id (required)' => 'ID of the brand.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'update',
    'name'        => 'Update Brand',
    'endpoint'    => 'PUT /brands/{id}',
    'description' => 'Updates a specific brand.',
    'params'      => [
      'id (required)' => 'ID of the brand.',
      'name (optional)'  => 'New name of the brand.',
      'image (optional)' => 'New image of the brand.'
    ],
    'request'     => '{"name": "chevrolet", "image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
    'response'    => '{"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'destroy',
    'name'        => 'Delete Brand',
    'endpoint'    => 'DELETE /brands/{id}',
    'description' => 'Removes a specific brand.',
    'params'      => [
      'id (required)' => 'ID of the brand.'
    ],
    'request'     => '{"msg": "Brand deleted"}'
  ]
], 'car_models' => [
  [
    'id'          => 'list',
    'name'        => 'List Car Models',
    'endpoint'    => 'GET /car_models',
    'description' => 'Returns a list of car models.',
    'params'      => [
      'brand_id (optional)'   => 'ID of the brand to be filtered.',
      'filter (optional)'     => 'Filters to be applied.',
      'attributes (optional)' => 'Specific attributes of the car models to be selected.'
    ],
    'request'     => null,
    'response'    => '    {"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'store',
    'name'        => 'Create New Car Model',
    'endpoint'    => 'POST /car_models',
    'description' => 'Stores a new car model.',
    'params'      => [
      'brand_id (required)'  => 'ID of the brand of the car model.',
      'name (required)'      => 'Name of the car model.',
      'image (optional)'        => 'Image of the car model.',
      'doors_number (optional)' => 'Number of doors of the car model.',
      'seats (optional)'        => 'Number of seats of the car model.',
      'air_bag (optional)'      => 'Presence of air bag in the car model.',
      'abs (optional)'          => 'Presence of ABS brakes in the car model.'
    ],
    'request'     => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
    'response'    => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'show',
    'name'        => 'Show Specific Car Model',
    'endpoint'    => 'GET /car_models/{id}',
    'description' => 'Displays a specific car model.',
    'params'      => [
      'id (required)' => 'ID of the car model.'
    ],
    'request'     => null,
    'response'    => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'update',
    'name'        => 'Update Car Model',
    'endpoint'    => 'PUT /car_models/{id}',
    'description' => 'Updates a specific car model.',
    'params'      => [
      'id (required)'        => 'ID of the car model.',
      'brand_id (optional)'     => 'New brand of the car model.',
      'name (optional)'         => 'New name of the car model.',
      'image (optional)'        => 'New image of the car model.',
      'doors_number (optional)' => 'New number of doors of the car model.',
      'seats (optional)'        => 'New number of seats of the car model.',
      'air_bag (optional)'      => 'New presence of air bag in the car model.',
      'abs (optional)'          => 'New presence of ABS brakes in the car model.'
    ],
    'request'     => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
    'response'    => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'destroy',
    'name'        => 'Delete Car Model',
    'endpoint'    => 'DELETE /car_models/{id}',
    'description' => 'Removes a specific car model.',
    'params'      => [
      'id (required)' => 'ID of the car model.'
    ],
    'request'     => '{"msg": "Car model deleted"}'
  ]
], 'cars' => [
  [
    'id'          => 'list',
    'name'        => 'List Cars',
    'endpoint'    => 'GET /cars',
    'description' => 'Returns a list of cars.',
    'params'      => [
      'car_model_id (optional)' => 'ID of the car model to be filtered.',
      'filter (optional)'       => 'Filters to be applied.',
      'attributes (optional)'   => 'Specific attributes of the cars to be selected.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'store',
    'name'        => 'Create New Car',
    'endpoint'    => 'POST /cars',
    'description' => 'Stores a new car.',
    'params'      => [
      'car_model_id (required)' => 'ID of the car model of the car.',
      'plate (required)'        => 'Car plate.',
      'available (optional)'    => 'Car availability.',
      'km (optional)'           => 'Car mileage.'
    ],
    'request'     => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'show',
    'name'        => 'Show Specific Car',
    'endpoint'    => 'GET /cars/{id}',
    'description' => 'Displays a specific car.',
    'params'      => [
      'id (required)' => 'Car ID.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'update',
    'name'        => 'Update Car',
    'endpoint'    => 'PUT /cars/{id}',
    'description' => 'Updates a specific car.',
    'params'      => [
      'id (required)'        => 'Car ID.',
      'car_model_id (optional)' => 'New car model of the car.',
      'plate (optional)'        => 'New car plate.',
      'available (optional)'    => 'New car availability.',
      'km (optional)'           => 'New car mileage.'
    ],
    'request'     => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'destroy',
    'name'        => 'Delete Car',
    'endpoint'    => 'DELETE /cars/{id}',
    'description' => 'Removes a specific car.',
    'params'      => [
      'id (required)' => 'Car ID.'
    ],
    'request'     => '{"msg": "Car deleted"}'
  ]
], 'customers' => [
  [
    'id'          => 'list',
    'name'        => 'List Customers',
    'endpoint'    => 'GET /customers',
    'description' => 'Returns a list of customers.',
    'params'      => [
      'filter (optional)'     => 'Filters to be applied.',
      'attributes (optional)' => 'Specific attributes of the customers to be selected.'
    ],
    'request'     => null,
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}'
  ],
  [
    'id'          => 'store',
    'name'        => 'Create New Customer',
    'endpoint'    => 'POST /customers',
    'description' => 'Stores a new customer.',
    'params'      => [
      'name (required)'  => 'Customer name.',
      'email (required)' => 'Customer email.'
    ],
    'request'     => '{"name": "Antonio", "email": "antonio@test.com"}',
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}'
  ],
  [
    'id'          => 'show',
    'name'        => 'Show Specific Customer',
    'endpoint'    => 'GET /customers/{id}',
    'description' => 'Displays a specific customer.',
    'params'      => [
      'id (required)' => 'Customer ID.'
    ],
    'request'     => null,
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}'
  ],
  [
    'id'          => 'update',
    'name'        => 'Update Customer',
    'endpoint'    => 'PUT /customers/{id}',
    'description' => 'Updates a specific customer.',
    'params'      => [
      'id (required)' => 'Customer ID.',
      'name (optional)'  => 'New customer name.',
      'email (optional)' => 'New customer email.'
    ],
    'request'     => '{"name": "Antonio", "email": "antonio@test.com"}',
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-09T07:01:20.000000Z","id": 3}'
  ],
  [
    'id'          => 'destroy',
    'name'        => 'Delete Customer',
    'endpoint'    => 'DELETE /customers/{id}',
    'description' => 'Removes a specific customer.',
    'params'      => [
      'id (required)' => 'Customer ID.'
    ],
    'response'    => '{"msg": "Customer deleted"}'
  ]
], 'rentals' => [
  [
    'id'          => 'list',
    'name'        => 'List Rentals',
    'endpoint'    => 'GET /rentals',
    'description' => 'Returns a list of rentals.',
    'params'      => [
      'customer_id (optional)' => 'Customer ID to be filtered.',
      'filter (optional)'      => 'Filters to be applied.',
      'attributes (optional)'  => 'Specific attributes of the rentals to be selected.'
    ],
    'request'     => null,
    'response'    => '    {"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'store',
    'name'        => 'Create New Rental',
    'endpoint'    => 'POST /rentals',
    'description' => 'Stores a new rental.',
    'params'      => [
      'customer_id (required)'           => 'Rental customer ID.',
      'car_id (required)'                => 'Rental car ID.',
      'start_date_period (required)'     => 'Rental start date.',
      'final_date_expected_period'       => 'Expected end date of the rental.',
      'end_date_realized_period (required)' => 'Actual end date of the rental.',
      'daily_value (optional)'           => 'Daily rate of the rental.',
      'initial_km (optional)'            => 'Initial mileage of the rental.',
      'final_km (optional)'              => 'Final mileage of the rental.'
    ],
    'request'     => '{"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
    'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'show',
    'name'        => 'Show Specific Rental',
    'endpoint'    => 'GET /rentals/{id}',
    'description' => 'Displays a specific rental.',
    'params'      => [
      'id (required)' => 'Rental ID.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'update',
    'name'        => 'Update Rental',
    'endpoint'    => 'PUT /rentals/{id}',
    'description' => 'Updates a specific rental.',
    'params'      => [
      'id (required)'                 => 'Rental ID.',
      'customer_id (optional)'        => 'New rental customer.',
      'car_id (optional)'             => 'New rental car.',
      'start_date_period (optional)'  => 'New start date of the rental.',
      'final_date_expected_period (optional)' => 'New expected end date of the rental.',
      'end_date_realized_period (optional)'   => 'New actual end date of the rental.',
      'daily_value (optional)'        => 'New daily rate of the rental.',
      'initial_km (optional)'         => 'New initial mileage of the rental.',
      'final_km (optional)'           => 'New final mileage of the rental.'
    ],
    'request'     => '{"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
    'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'destroy',
    'name'        => 'Delete Rental',
    'endpoint'    => 'DELETE /rentals/{id}',
    'description' => 'Removes a specific rental.',
    'params'      => [
      'id (required)' => 'Rental ID.'
    ],
    'request'     => '{"msg": "Rental deleted"}'
  ]
]];