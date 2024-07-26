<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateProduct()
    {
        $response = $this->postJson('/products', [
            'id' => 1,
            'name' => 'Product Name',
            'price' => 99.99,
        ]);


        $response->assertStatus(200);


    }
}
