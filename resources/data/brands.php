<?php
return ['brands' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Marcas',
    'endpoint'    => 'GET /brands',
    'description' => 'Retorna uma lista de marcas.',
    'params'      => [
      'car_model_attributes (opcional)' => 'Atributos dos modelos de carro a serem selecionados.',
      'filter (opcional)'               => 'Filtros a serem aplicados.',
      'attributes (opcional)'           => 'Atributos específicos das marcas a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg","car_models": []}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Nova Marca',
    'endpoint'    => 'POST /brands',
    'description' => 'Armazena uma nova marca.',
    'params'      => [
      'name (obrigatório)'  => 'Nome da marca.',
      'image (obrigatório)' => 'Imagem da marca.'
    ],
    'request'     => '{"name": "Marca B","image": "data:image/jpeg;base64,..."}',
    'response'    => '{"id": 2,"name": "Marca B","image": "images/brand/marca_b.jpg"}'
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
    'response'    => '{"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}'
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
    'request'     => '{"name": "Marca A","image": "data:image/jpeg;base64," }',
    'response'    => '{"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}'
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
    'response'    => '{"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Modelo de Carro',
    'endpoint'    => 'POST /car_models',
    'description' => 'Armazena um novo modelo de carro.',
    'params'      => [
      'name (obrigatório)'     => 'Nome do modelo de carro.',
      'brand_id (obrigatório)' => 'ID da marca do modelo de carro.'
    ],
    'request'     => '{"name": "Modelo B","brand_id": 2}',
    'response'    => '{"id": 2,"name": "Modelo B","brand_id": 2,"brand": {"id": 2,"name": "Marca B","image": "images/brand/marca_b.jpg"}}'
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
    'response'    => '{"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Modelo de Carro',
    'endpoint'    => 'PUT /car_models/{id}',
    'description' => 'Atualiza um modelo de carro específico.',
    'params'      => [
      'id (obrigatório)'    => 'ID do modelo de carro.',
      'name (opcional)'     => 'Novo nome do modelo de carro.',
      'brand_id (opcional)' => 'Nova marca do modelo de carro.'
    ],
    'request'     => '{"name": "Modelo A","brand_id": 1}',
    'response'    => '{"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}'
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
    'response'    => '{"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Carro',
    'endpoint'    => 'POST /cars',
    'description' => 'Armazena um novo carro.',
    'params'      => [
      'name (obrigatório)'         => 'Nome do carro.',
      'car_model_id (obrigatório)' => 'ID do modelo de carro do carro.'
    ],
    'request'     => '{"name": "Carro B","car_model_id": 2}',
    'response'    => '{"id": 2,"name": "Carro B","car_model_id": 2,"car_model": {"id": 2,"name": "Modelo B","brand_id": 2,"brand": {"id": 2,"name": "Marca B","image": "images/brand/marca_b.jpg"}}}'
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
    'response'    => '{"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Carro',
    'endpoint'    => 'PUT /cars/{id}',
    'description' => 'Atualiza um carro específico.',
    'params'      => [
      'id (obrigatório)'        => 'ID do carro.',
      'name (opcional)'         => 'Novo nome do carro.',
      'car_model_id (opcional)' => 'Novo modelo de carro do carro.'
    ],
    'request'     => '{"name": "Carro A","car_model_id": 1}',
    'response'    => '{"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}}'
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
    'response'    => '{"id": 1,"name": "Cliente A"}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Cliente',
    'endpoint'    => 'POST /costumers',
    'description' => 'Armazena um novo cliente.',
    'params'      => [
      'name (obrigatório)' => 'Nome do cliente.'
    ],
    'request'     => '{"name": "Cliente B"}',
    'response'    => '{"id": 2,"name": "Cliente B"}'
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
    'response'    => '{"id": 1,"name": "Cliente A"}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Cliente',
    'endpoint'    => 'PUT /costumers/{id}',
    'description' => 'Atualiza um cliente específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do cliente.',
      'name (opcional)'  => 'Novo nome do cliente.'
    ],
    'request'     => '{"name": "Cliente A"}',
    'response'    => '{"id": 1,"name": "Cliente A"}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Cliente',
    'endpoint'    => 'DELETE /costumers/{id}',
    'description' => 'Remove um cliente específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do cliente.'
    ],
    'request'     => '{"msg": "Costumer deleted"}'
  ]
], 'rents' => [
  [
    'id'          => 'listar',
    'name'        => 'Listar Aluguéis',
    'endpoint'    => 'GET /rents',
    'description' => 'Retorna uma lista de aluguéis.',
    'params'      => [
      'costumer_id (opcional)' => 'ID do cliente a ser filtrado.',
      'filter (opcional)'      => 'Filtros a serem aplicados.',
      'attributes (opcional)'  => 'Atributos específicos dos aluguéis a serem selecionados.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"costumer_id": 1,"costumer": {"id": 1,"name": "Cliente A"},"car_id": 1,"car": {"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}},"start_date": "2024-09-02","end_date": "2024-09-03"}'
  ],
  [
    'id'          => 'criar',
    'name'        => 'Criar Novo Aluguel',
    'endpoint'    => 'POST /rents',
    'description' => 'Armazena um novo aluguel.',
    'params'      => [
      'costumer_id (obrigatório)' => 'ID do cliente do aluguel.',
      'car_id (obrigatório)'      => 'ID do carro do aluguel.',
      'start_date (obrigatório)'  => 'Data de início do aluguel.',
      'end_date (obrigatório)'    => 'Data de término do aluguel.'
    ],
    'request'     => '{"costumer_id": 1,"car_id": 1,"start_date": "2024-09-02","end_date": "2024-09-03"}',
    'response'    => '{"id": 1,"costumer_id": 1,"costumer": {"id": 1,"name": "Cliente A"},"car_id": 1,"car": {"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}},"start_date": "2024-09-02","end_date": "2024-09-03"}'
  ],
  [
    'id'          => 'exibir',
    'name'        => 'Exibir Aluguel Específico',
    'endpoint'    => 'GET /rents/{id}',
    'description' => 'Exibe um aluguel específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do aluguel.'
    ],
    'request'     => null,
    'response'    => '{"id": 1,"costumer_id": 1,"costumer": {"id": 1,"name": "Cliente A"},"car_id": 1,"car": {"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}},"start_date": "2024-09-02","end_date": "2024-09-03"}'
  ],
  [
    'id'          => 'atualizar',
    'name'        => 'Atualizar Aluguel',
    'endpoint'    => 'PUT /rents/{id}',
    'description' => 'Atualiza um aluguel específico.',
    'params'      => [
      'id (obrigatório)'       => 'ID do aluguel.',
      'costumer_id (opcional)' => 'Novo cliente do aluguel.',
      'car_id (opcional)'      => 'Novo carro do aluguel.',
      'start_date (opcional)'  => 'Nova data de início do aluguel.',
      'end_date (opcional)'    => 'Nova data de término do aluguel.'
    ],
    'request'     => '{"costumer_id": 1,"car_id": 1,"start_date": "2024-09-02","end_date": "2024-09-03"}',
    'response'    => '{"id": 1,"costumer_id": 1,"costumer": {"id": 1,"name": "Cliente A"},"car_id": 1,"car": {"id": 1,"name": "Carro A","car_model_id": 1,"car_model": {"id": 1,"name": "Modelo A","brand_id": 1,"brand": {"id": 1,"name": "Marca A","image": "images/brand/marca_a.jpg"}}},"start_date": "2024-09-02","end_date": "2024-09-03"}'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Aluguel',
    'endpoint'    => 'DELETE /rents/{id}',
    'description' => 'Remove um aluguel específico.',
    'params'      => [
      'id (obrigatório)' => 'ID do aluguel.'
    ],
    'request'     => '{"msg": "Rents deleted"}'
  ]
]];
