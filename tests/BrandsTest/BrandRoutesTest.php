<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BrandRoutesTest extends TestCase
{
  /**
   * Test Brand Routes
   *
   * @return void
   */
  public function testBrandRoutes()
  {
    $response = $this->get('/api/brands/');
    $response->assertStatus(200);
  }

  public function test_list_brands_endpoint_works()
  {
    $response = $this->get('/api/brands/');
    $response->assertStatus(200);
    $response->assertJsonStructure([
      '*' => [
        'id',
        'name',
        'image',
        'created_at',
        'updated_at',
        'car_models'
      ]
    ]);
  }

  public function test_store_brand_endpoint_works()
  {
    $file = UploadedFile::fake()->image('brand.png');
    $response = $this->post('/api/brands', [
      'name' => fake()->name,
      'image' => $file,
    ]);
    $response->assertStatus(201);
    Storage::disk('public')->assertExists('/images/brand/' . $file->hashName());
    $response->assertJsonStructure([
      'id',
      'name',
      'image',
      'created_at',
      'updated_at'
    ]);
    $GLOBALS['id'] = $response->json('id');
  }

  public function test_show_brand_endpoint_works()
  {
    $response = $this->get('/api/brands/' . $GLOBALS['id']);
    $response->assertStatus(200);
    $response->assertJsonStructure([
      'id',
      'name',
      'image',
      'created_at',
      'updated_at',
      'car_models'
    ]);
  }

  public function test_update_brand_endpoint_works()
  {
    $file = UploadedFile::fake()->image('brand.png');
    $response = $this->post('/api/brands/' . $GLOBALS['id'], [
      'name' => fake()->name,
      'image' => $file,
      '_method' => 'put'
    ]);
    $response->assertStatus(201);
    Storage::disk('public')->assertExists('/images/brand/' . $file->hashName());
    $response->assertJsonStructure([
      'id',
      'name',
      'image',
      'created_at',
      'updated_at'
    ]);
  }

  public function test_delete_brand_endpoint_works()
  {
    $response = $this->delete('/api/brands/' . $GLOBALS['id']);
    $response->assertStatus(200);
  }
}
