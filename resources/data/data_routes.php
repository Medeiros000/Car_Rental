<?php
return ['brands' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Marcas',
    'endpoint'    => 'GET /brands',
    'description' => 'Retorna uma lista de marcas.',
    'params'      => [
      'name (opcional)'       => 'Nome da marca a ser filtrada.',
      'created_at'            => 'Data de criação da marca.',
      'updated_at'            => 'Data de atualização da marca.',
      'filter (opcional)'     => 'Filtros a serem aplicados.',
      'attributes (opcional)' => 'Atributos específicos das marcas a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '    {"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Nova Marca',
    'endpoint'    => 'POST /brands',
    'description' => 'Armazena uma nova marca.',
    'params'      => [
      'name (obrigatório)' => 'Nome da marca.',
      'image (opcional)'   => 'Imagem da marca.'
    ],
    'request'     => '{"name": "fiat","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
    'response'    => '{"id": 2,"name": "fiat","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'exibir',
    'name'        => 'Exibir Marca Específica',
    'endpoint'    => 'GET /brands/{id}',
    'description' => 'Exibe uma marca específica.',
    'params'      => [
      'id (obrigatório)' => 'ID da marca.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"name": "chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Marca',
    'endpoint'    => 'PUT /brands/{id}',
    'description' => 'Atualiza uma marca específica.',
    'params'      => [
      'id (obrigatório)' => 'ID da marca.',
      'name (opcional)'  => 'Novo nome da marca.',
      'image (opcional)' => 'Nova imagem da marca.'
    ],
    'request'     => '{"name": "chevrolet", "image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png"}',
    'response'    => '{"id": 1,"name":
"chevrolet","image": "images/brand/AFakjlU4mBTUyZavTYJcwfb81uYpXTdeCfG2nMfF.png","created_at": "2025-02-13T21:44:30.000000Z","updated_at": "2025-02-13T21:44:30.000000Z","car_models": []}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Marca',
    'endpoint'    => 'DELETE /brands/{id}',
    'description' => 'Remove uma marca específica.',
    'params'      => [
      'id (obrigatório)' => 'ID da marca.'
    ],
    'request'     => '{"msg": "Brand deleted"}'
  ]
], 'car_models' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Modelos de Carro',
    'endpoint'    => 'GET /car_models',
    'description' => 'Retorna uma lista de modelos de carro.',
    'params'      => [
      'brand_id (opcional)'   => 'ID da marca a ser filtrada.',
      'filter (opcional)'     => 'Filtros a serem aplicados.',
      'attributes (opcional)' => 'Atributos específicos dos modelos de carro a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '    {"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Modelo de Carro',
    'endpoint'    => 'POST /car_models',
    'description' => 'Armazena um novo modelo de carro.',
    'params'      => [
      'brand_id (obrigatório)'  => 'ID da marca do modelo de carro.',
      'name (obrigatório)'      => 'Nome do modelo de carro.',
      'image (opcional)'        => 'Imagem do modelo de carro.',
      'doors_number (opcional)' => 'Número de portas do modelo de carro.',
      'seats (opcional)'        => 'Número de assentos do modelo de carro.',
      'air_bag (opcional)'      => 'Presença de air bag no modelo de carro.',
      'abs (opcional)'          => 'Presença de freios ABS no modelo de carro.'
    ],
    'request'     => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
    'response'    => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'exibir',
    'name'        => 'Exibir Modelo de Carro Específico',
    'endpoint'    => 'GET /car_models/{id}',
    'description' => 'Exibe um modelo de carro específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do modelo de carro.'
    ],
    'request'     => null,
    'response'    => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Modelo de Carro',
    'endpoint'    => 'PUT /car_models/{id}',
    'description' => 'Atualiza um modelo de carro específico.',
    'params'      => [
      'id (obrigatório)'        => 'ID do modelo de carro.',
      'brand_id (opcional)'     => 'Nova marca do modelo de carro.',
      'name (opcional)'         => 'Novo nome do modelo de carro.',
      'image (opcional)'        => 'Nova imagem do modelo de carro.',
      'doors_number (opcional)' => 'Novo número de portas do modelo de carro.',
      'seats (opcional)'        => 'Novo número de assentos do modelo de carro.',
      'air_bag (opcional)'      => 'Nova presença de air bag no modelo de carro.',
      'abs (opcional)'          => 'Nova presença de freios ABS no modelo de carro.'
    ],
    'request'     => '{"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false}',
    'response'    => '{"id": 6,"brand_id": 6,"name": "Gol 1.0","image": "images/car_model/PFPATBwWx80Ld3FNJRVWWneAarBujVL717TImgv8.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": false,"created_at": "2025-02-13T23:04:30.000000Z","updated_at": "2025-02-13T23:04:30.000000Z","brand": {"id": 6,"name": "volkswagen","image": "images/brand/a8E3JYT3HpgGRFsaLo95ThCbyODdz7HXpFUftvLo.png","created_at": "2025-02-13T21:50:30.000000Z","updated_at": "2025-02-13T21:50:30.000000Z"}}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Modelo de Carro',
    'endpoint'    => 'DELETE /car_models/{id}',
    'description' => 'Remove um modelo de carro específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do modelo de carro.'
    ],
    'request'     => '{"msg": "Car model deleted"}'
  ]
], 'cars' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Carros',
    'endpoint'    => 'GET /cars',
    'description' => 'Retorna uma lista de carros.',
    'params'      => [
      'car_model_id (opcional)' => 'ID do modelo de carro a ser filtrado.',
      'filter (opcional)'       => 'Filtros a serem aplicados.',
      'attributes (opcional)'   => 'Atributos específicos dos carros a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Carro',
    'endpoint'    => 'POST /cars',
    'description' => 'Armazena um novo carro.',
    'params'      => [
      'car_model_id (obrigatório)' => 'ID do modelo de carro do carro.',
      'plate (obrigatório)'        => 'Placa do carro.',
      'available (opcional)'       => 'Disponibilidade do carro.',
      'km (opcional)'              => 'Quilometragem do carro.'
    ],
    'request'     => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'exibir',
    'name'        => 'Exibir Carro Específico',
    'endpoint'    => 'GET /cars/{id}',
    'description' => 'Exibe um carro específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do carro.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Carro',
    'endpoint'    => 'PUT /cars/{id}',
    'description' => 'Atualiza um carro específico.',
    'params'      => [
      'id (obrigatório)'        => 'ID do carro.',
      'car_model_id (opcional)' => 'Novo modelo de carro do carro.',
      'plate (opcional)'        => 'Nova placa do carro.',
      'available (opcional)'    => 'Nova disponibilidade do carro.',
      'km (opcional)'           => 'Nova quilometragem do carro.'
    ],
    'request'     => '{"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000}',
    'response'    => '{"id": 1,"car_model_id": 1,"plate": "AAA-3333","available": true,"km": 1000,"created_at": "2025-02-13T22:44:17.000000Z","updated_at": "2025-02-13T22:44:17.000000Z","car_model": {"id": 1,"brand_id": 6,"name": "Polo","image": "images/car_model/mUB9KhXnmTW9Api3QnWDGxz6CgInqKb3XJlhFdUX.png","doors_number": 5,"seats": 5,"air_bag": true,"abs": true,"created_at": "2025-02-13T21:56:52.000000Z","updated_at": "2025-02-13T22:00:57.000000Z"}}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Carro',
    'endpoint'    => 'DELETE /cars/{id}',
    'description' => 'Remove um carro específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do carro.'
    ],
    'request'     => '{"msg": "Car deleted"}'
  ]
], 'costumers' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Clientes',
    'endpoint'    => 'GET /costumers',
    'description' => 'Retorna uma lista de clientes.',
    'params'      => [
      'filter (opcional)'     => 'Filtros a serem aplicados.',
      'attributes (opcional)' => 'Atributos específicos dos clientes a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Cliente',
    'endpoint'    => 'POST /costumers',
    'description' => 'Armazena um novo cliente.',
    'params'      => [
      'name (obrigatório)'  => 'Nome do cliente.',
      'email (obrigatório)' => 'Email do cliente.'
    ],
    'request'     => '{"name": "Antonio", "email": "antonio@test.com"}',
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}'
  ],
  [
    'id'          => 'exibir',
    'name'        => 'Exibir Cliente Específico',
    'endpoint'    => 'GET /costumers/{id}',
    'description' => 'Exibe um cliente específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do cliente.'
    ],
    'request'     => null,
    'response'    => '{"name": "Antonio","email": "antonio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-07T18:08:42.000000Z","id": 3}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Cliente',
    'endpoint'    => 'PUT /costumers/{id}',
    'description' => 'Atualiza um cliente específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do cliente.',
      'name (opcional)'  => 'Novo nome do cliente.',
      'email (opcional)' => 'Novo email do cliente.'
    ],
    'request'     => '{"name": "Antonnio", "email": "antonio@test.com"}',
    'response'    => '{"name": "Antonnio","email": "antonnio@test.com","updated_at": "2025-03-07T18:08:42.000000Z","created_at": "2025-03-09T07:01:20.000000Z","id": 3}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Cliente',
    'endpoint'    => 'DELETE /costumers/{id}',
    'description' => 'Remove um cliente específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do cliente.'
    ],
    'response'    => '{"msg": "Costumer deleted"}'
  ]
], 'rentals' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Aluguéis',
    'endpoint'    => 'GET /rentals',
    'description' => 'Retorna uma lista de aluguéis.',
    'params'      => [
      'costumer_id (opcional)' => 'ID do cliente a ser filtrado.',
      'filter (opcional)'      => 'Filtros a serem aplicados.',
      'attributes (opcional)'  => 'Atributos específicos dos aluguéis a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '    {"id": 1,"costumer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Aluguel',
    'endpoint'    => 'POST /rentals',
    'description' => 'Armazena um novo aluguel.',
    'params'      => [
      'costumer_id (obrigatório)' => 'ID do cliente do aluguel.',
      'car_id (obrigatório)'      => 'ID do carro do aluguel.',
      'start_date_period (obrigatório)'  => 'Data de início do aluguel.',
      'final_date_expected_period' => 'Data de término esperada do aluguel.',
      'end_date_realized_period (obrigatório)'    => 'Data de término do aluguel.',
      'daily_value (opcional)'     => 'Valor diário do aluguel.',
      'initial_km (opcional)'      => 'Quilometragem inicial do aluguel.',
      'final_km (opcional)'        => 'Quilometragem final do aluguel.'
    ],
    'request'     => '{"costumer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
    'response'    => '{"id": 1,"costumer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'exibir',
    'name'        => 'Exibir Aluguel Específico',
    'endpoint'    => 'GET /rentals/{id}',
    'description' => 'Exibe um aluguel específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do aluguel.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"costumer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Aluguel',
    'endpoint'    => 'PUT /rentals/{id}',
    'description' => 'Atualiza um aluguel específico.',
    'params'      => [
      'id (obrigatório)'                => 'ID do aluguel.',
      'costumer_id (opcional)'          => 'Novo cliente do aluguel.',
      'car_id (opcional)'               => 'Novo carro do aluguel.',
      'start_date_period (opcional)'    => 'Nova data de início do aluguel.',
      'final_date_expected_period (opcional)' => 'Nova data de término esperada do aluguel.',
      'end_date_realized_period (opcional)'   => 'Nova data de término do aluguel.',
      'daily_value (opcional)'          => 'Novo valor diário do aluguel.',
      'initial_km (opcional)'           => 'Nova quilometragem inicial do aluguel.',
      'final_km (opcional)'             => 'Nova quilometragem final do aluguel.'
    ],
    'request'     => '{"costumer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111}',
    'response'    => '{"id": 1,"costumer_id": 3,"car_id": 1,"start_date_period": "2024-09-15 00:00:00","final_date_expected_period": "2024-09-17 00:00:00","end_date_realized_period": "2024-09-17 00:00:00","daily_value": 10,"initial_km": 1001,"final_km": 1111,"created_at": "2025-03-07T18:49:24.000000Z","updated_at": "2025-03-07T18:49:24.000000Z"}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Aluguel',
    'endpoint'    => 'DELETE /rentals/{id}',
    'description' => 'Remove um aluguel específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do aluguel.'
    ],
    'request'     => '{"msg": "Rental deleted"}'
  ]
]];
