<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_brand_data_output_test()
    {
        $response = $this->getJson('/api/showBrands');

        $response->assertStatus(200);
    }

    // public function test_brand_data_create_test()
    // {
    //     $response = $this->postJson('/api/createBrand',['name' => 'BMW']);

    //     $response->assertStatus(201);
    // }

    // public function test_brand_data_update_test()
    // {
    //     $response = $this->putJson('/api/updateBrand/4',['name' => 'Porsche']);

    //     $response->assertStatus(200);
    // }

    // public function test_brand_data_delete_test()
    // {
    //     $response = $this->deleteJson('/api/deleteBrand/4');

    //     $response->assertStatus(204);
    // }

    // public function test_brand_data_update_test_by_update()
    // {
    //     $response = $this->putJson('/api/updateBrand/2',['name' => 'Porsche']);

    //     $response->assertNotFound();
    // }

    // public function test_brand_not_found_test_by_delete()
    // {
    //     $response = $this->deleteJson('/api/deleteBrand/2');

    //     $response->assertNotFound();
    // }

    // public function test_brand_data_base_output_test(){
    //     $response = $this->getJson('/api/showBrands');

    //     $response->assertStatus(500);
    // }
}
