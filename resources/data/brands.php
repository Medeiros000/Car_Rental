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
    'response'    => '
  [
    {
      "id": 1,
      "name": "Marca A",
      "image": "images/brand/marca_a.jpg",
      "car_models": [...]
    },
      ...
  ]'
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
    'request'     => '
  {
    "name": "Marca B",
    "image": "data:image/jpeg;base64,..."
  }',
    'response'    => '
  {
    "id": 2,
    "name": "Marca B",
    "image": "images/brand/marca_b.jpg"
  }'
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
    'response'    => '
  {
    "id": 1,
    "name": "Marca A",
    "image": "images/brand/marca_a.jpg"
  }'
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
    'request'     => '
  {
    "name": "Marca A",
    "image": "data:image/jpeg;base64,..." 
  }',
    'response'    => '
  {
    "id": 1,
    "name": "Marca A",
    "image": "images/brand/marca_a.jpg"
  }'
  ],
  [
    'id'          => 'deletar',
    'name'        => 'Deletar Marca',
    'endpoint'    => 'DELETE /brands/{id}',
    'description' => 'Remove uma marca específica.',
    'params'      => [
      'id (obrigatório)' => 'ID da marca.'
    ],
    'request'     => '
  {
    "msg": "Brand deleted"
  }'
  ]
]];
