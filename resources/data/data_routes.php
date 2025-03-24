<?php
return [
  'brands' => [
    [
      'method' => 'GET',
      'id' => 'list',
      'uri' => '/api/brands',
      'description' => 'Returns a list of brands',
      'parameters'      => [
        'filter;string;optional;Filters to be applied',
        'attributes;string;optional;Specific attributes of the brands to be selected'
      ],
      'request' => null,
      'response'    => '    {"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'POST',
      'id' => 'store',
      'uri' => '/api/brands',
      'description' => 'Stores a new brand',
      'parameters' => [
        'name;string;required;Name of the brand',
        'image;png;required;Image of the brand'
      ],
      'request' => '{"name": "fiat","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
      'response' => '{"id": 2,"name": "fiat","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}',
      'response_code' => [
        '201' => 'Created',
        '422' => 'Unprocessable Entity'
      ]
    ],
    [
      'method' => 'GET',
      'id' => 'show',
      'uri' => '/api/brands/{id}',
      'description' => 'Displays a specific brand',
      'parameters' => [
        'id;integer;required;ID of the brand'
      ],
      'request' => null,
      'response' => '{"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PUT',
      'id' => 'update',
      'uri' => '/api/brands/{id}',
      'description' => 'Updates a specific brand',
      'parameters' => [
        'id;integer;required;ID of the brand',
        'name;string;required;New name of the brand',
        'image;png;required;New image of the brand',
        '_method;string;required;put'
      ],
      'request' => '{"name": "chevrolet", "image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
      'response' => '{"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PATCH',
      'id' => 'update',
      'uri' => '/api/brands/{id}',
      'description' => 'Updates a specific brand.',
      'parameters' => [
        'id;integer;required;ID of the brand',
        'name;string;optional;New name of the brand',
        'image;png;optional;New image of the brand',
        '_method;string;required;patch'
      ],
      'request' => '{"name": "chevrolet", "image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
      'response' => '{"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'DELETE',
      'id' => 'delete',
      'uri' => '/api/brands/{id}',
      'description' => 'Removes a specific brand',
      'parameters'      => [
        'id;integer;required;ID of the brand'
      ],
      'request' => null,
      'response' => '{"msg": "Brand deleted"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ]
  ],
  'car_models' => [
    [
      'method' => 'GET',
      'id' => 'list',
      'uri' => '/api/car_models',
      'description' => 'Returns a list of car models.',
      'parameters' => [
        'filter;string;optional;Filters to be applied',
        'attributes;string;optional;Specific attributes of the car models to be selected'
      ],
      'request' => null,
      'response' => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'POST',
      'id' => 'store',
      'uri' => '/api/car_models',
      'description' => 'Stores a new car model.',
      'parameters' => [
        'brand_id;integer;required;ID of the brand of the car model',
        'name;string;required;Name of the car model',
        'image;png;required;Image of the car model',
        'doors_number;integer;required;Number of doors of the car model',
        'seats;integer;required;Number of seats of the car model',
        'air_bag;boolean;required;Presence of air bag in the car model',
        'abs;boolean;required;Presence of ABS brakes in the car model'
      ],
      'request' => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
      'response' => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}',
      'response_code' => [
        '201' => 'Created',
        '422' => 'Unprocessable Entity'
      ]
    ],
    [
      'method' => 'GET',
      'id' => 'show',
      'uri' => '/api/car_models/{id}',
      'description' => 'Displays a specific car model',
      'parameters'      => [
        'id;integer;required;ID of the car model'
      ],
      'request' => null,
      'response' => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PUT',
      'id' => 'update',
      'uri' => '/api/car_models/{id}',
      'description' => 'Updates a specific car model',
      'parameters' => [
        'id;integer;required;ID of the car model',
        'brand_id;integer;required;New brand of the car model',
        'name;string;required;New name of the car model',
        'image;png;required;New image of the car model',
        'doors_number;integer;required;New number of doors of the car model',
        'seats;integer;required;New number of seats of the car model',
        'air_bag;boolean;required;New presence of air bag in the car model',
        'abs;boolean;required;New presence of ABS brakes in the car model',
        '_method;string;required;put'
      ],
      'request' => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
      'response' => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PATCH',
      'id' => 'update',
      'uri' => '/api/car_models/{id}',
      'description' => 'Updates a specific car model',
      'parameters' => [
        'id;integer;required;ID of the car model',
        'brand_id;integer;optional;New brand of the car model',
        'name;string;optional;New name of the car model',
        'image;png;optional;New image of the car model',
        'doors_number;integer;optional;New number of doors of the car model',
        'seats;integer;optional;New number of seats of the car model',
        'air_bag;boolean;optional;New presence of air bag in the car model',
        'abs;boolean;optional;New presence of ABS brakes in the car model',
        '_method;string;required;patch'
      ],
      'request' => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
      'response' => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'DELETE',
      'id' => 'delete',
      'uri' => '/api/car_models/{id}',
      'description' => 'Removes a specific car model',
      'parameters' => [
        'id;integer;required;ID of the car model'
      ],
      'request' => null,
      'response' => '{"msg": "Car model deleted"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ]
  ],
  'cars' => [
    [
      'method' => 'GET',
      'id' => 'list',
      'uri' => '/api/cars',
      'description' => 'Returns a list of cars.',
      'parameters' => [
        'car_model_id;integer;optional;ID of the car model to be filtered',
        'filter;string;optional;Filters to be applied',
        'attributes;string;optional;Specific attributes of the cars to be selected'
      ],
      'request' => null,
      'response' => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'POST',
      'id' => 'store',
      'uri' => '/api/cars',
      'description' => 'Stores a new car',
      'parameters' => [
        'car_model_id;integer;required;ID of the car model of the car',
        'plate;string;required;Car plate',
        'available;boolean;optional;Car availability',
        'km;integer;optional;Car mileage'
      ],
      'request' => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
      'response' => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}',
      'response_code' => [
        '201' => 'Created',
        '422' => 'Unprocessable Entity'
      ]
    ],
    [
      'method' => 'GET',
      'id' => 'show',
      'uri' => '/api/cars/{id}',
      'description' => 'Displays a specific car',
      'parameters' => [
        'id;integer;required;Car ID'
      ],
      'request' => null,
      'response' => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PUT',
      'id' => 'update',
      'uri' => '/api/cars/{id}',
      'description' => 'Updates a specific car',
      'parameters' => [
        'id;integer;required;Car ID',
        'car_model_id;integer;optional;New car model of the car',
        'plate;string;required;New car plate',
        'available;boolean;required;New car availability',
        'km;integer;required;New car mileage',
        '_method;string;required;put'
      ],
      'request' => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
      'response' => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PATCH',
      'id' => 'update',
      'uri' => '/api/cars/{id}',
      'description' => 'Updates a specific car',
      'parameters' => [
        'id;integer;required;Car ID',
        'car_model_id;integer;optional;New car model of the car',
        'plate;string;optional;New car plate',
        'available;boolean;optional;New car availability',
        'km;integer;optional;New car mileage',
        '_method;string;required;patch'
      ],
      'request' => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
      'response' => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'DELETE',
      'id' => 'delete',
      'uri' => '/api/cars/{id}',
      'description' => 'Removes a specific car',
      'parameters' => [
        'id;integer;required;Car ID'
      ],
      'request' => null,
      'response' => '{"msg": "Car deleted"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ]
  ],
  'customers' => [
    [
      'method' => 'GET',
      'id' => 'list',
      'uri' => '/api/customers',
      'description' => 'Returns a list of customers',
      'parameters'      => [
        'filter;string;optional;Filters to be applied',
        'attributes;string;optional;Specific attributes of the customers to be selected'
      ],
      'request' => null,
      'response' => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'POST',
      'id' => 'store',
      'uri' => '/api/customers',
      'description' => 'Stores a new customer',
      'parameters' => [
        'name;string;required;Customer name',
        'email;string;required;Customer email'
      ],
      'request'     => '{"name": "Antonio", "email": "antonio@test.com"}',
      'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}',
      'response_code' => [
        '201' => 'Created',
        '422' => 'Unprocessable Entity'
      ]
    ],
    [
      'method' => 'GET',
      'id'          => 'show',
      'uri'    => '/api/customers/{id}',
      'description' => 'Displays a specific customer',
      'parameters'      => [
        'id;integer;required;Customer ID.'
      ],
      'request'     => null,
      'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PUT',
      'id'          => 'update',
      'uri'    => '/api/customers/{id}',
      'description' => 'Updates a specific customer',
      'parameters'      => [
        'id;integer;required;Customer ID',
        'name;string;required;New customer name',
        'email;string;required;New customer email',
        '_method;string;required;put'
      ],
      'request'     => '{"name": "Antonio", "email": "antonio@test.com"}',
      'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-09T07:01:20.000000Z","id": 3}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PATCH',
      'id'          => 'update',
      'uri'    => '/api/customers/{id}',
      'description' => 'Updates a specific customer',
      'parameters'      => [
        'id;integer;required;Customer ID',
        'name;string;optional;New customer name',
        'email;string;optional;New customer email',
        '_method;string;required;patch'
      ],
      'request'     => '{"name": "Antonio", "email": "antonio@test.com"}',
      'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-09T07:01:20.000000Z","id": 3}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'DELETE',
      'id'          => 'delete',
      'uri' => '/api/customers/{id}',
      'description' => 'Removes a specific customer',
      'parameters'      => [
        'id;integer;required;Customer ID'
      ],
      'request'     => null,
      'response'    => '{"msg": "Customer deleted"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ]
  ],
  'rentals' => [
    [
      'method' => 'GET',
      'id'          => 'list',
      'uri'    => '/api/rentals',
      'description' => 'Returns a list of rentals',
      'parameters'      => [
        'customer_id;integer;optional;Customer ID to be filtered',
        'filter;string;optional;Filters to be applied',
        'attributes;string;optional;Specific attributes of the rentals to be selected'
      ],
      'request'     => null,
      'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'POST',
      'id'          => 'store',
      'uri'    => '/api/rentals',
      'description' => 'Stores a new rental',
      'parameters'      => [
        'customer_id;integer;required;Rental customer ID',
        'car_id;integer;required;Rental car ID',
        'start_date_period;datetime;required;Rental start date',
        'final_date_expected_period;datetime;required;Expected end date of the rental',
        'end_date_realized_period;datetime;required;Actual end date of the rental',
        'daily_value;float;optional;Daily rate of the rental',
        'initial_km;integer;optional;Initial mileage of the rental',
        'final_km;integer;optional;Final mileage of the rental'
      ],
      'request'     => '{"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
      'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}',
      'response_code' => [
        '201' => 'Created',
        '422' => 'Unprocessable Entity'
      ]
    ],
    [
      'method' => 'GET',
      'id'          => 'show',
      'uri'    => '/api/rentals/{id}',
      'description' => 'Displays a specific rental',
      'parameters'      => [
        'id;integer;required;Rental ID'
      ],
      'request'     => null,
      'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PUT',
      'id'          => 'update',
      'uri'    => '/api/rentals/{id}',
      'description' => 'Updates a specific rental',
      'parameters'      => [
        'id;integer;required;Rental ID',
        'customer_id;integer;required;New rental customer',
        'car_id;integer;required;New rental car',
        'start_date_period;datetime;required;New start date of the rental',
        'final_date_expected_period;datetime;required;New expected end date of the rental',
        'end_date_realized_period;datetime;required;New actual end date of the rental',
        'daily_value;float;required;New daily rate of the rental',
        'initial_km;integer;required;New initial mileage of the rental',
        'final_km;integer;required;New final mileage of the rental',
        '_method;string;required;put'
      ],
      'request'     => '{"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
      'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'PATCH',
      'id'          => 'update',
      'uri'    => '/api/rentals/{id}',
      'description' => 'Updates a specific rental',
      'parameters'      => [
        'id;integer;required;Rental ID',
        'customer_id;integer;optional;New rental customer',
        'car_id;integer;optional;New rental car',
        'start_date_period;datetime;optional;New start date of the rental',
        'final_date_expected_period;datetime;optional;New expected end date of the rental',
        'end_date_realized_period;datetime;optional;New actual end date of the rental',
        'daily_value;float;optional;New daily rate of the rental',
        'initial_km;integer;optional;New initial mileage of the rental',
        'final_km;integer;optional;New final mileage of the rental',
        '_method;string;required;patch'
      ],
      'request'     => '{"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
      'response'    => '{"id": 1,"customer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ],
    [
      'method' => 'DELETE',
      'id'          => 'delete',
      'uri'    => '/api/rentals/{id}',
      'description' => 'Removes a specific rental',
      'parameters'      => [
        'id;integer;required;Rental ID'
      ],
      'request'     => null,
      'response'    => '{"msg": "Rental deleted"}',
      'response_code' => [
        '200' => 'Success',
        '404' => 'Not Found'
      ]
    ]
  ]
];
