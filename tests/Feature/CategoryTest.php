<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_category_data_output_test()
    {
        $response = $this->getJson('/api/showCategories');

        $response->assertStatus(200);
    }
    
    // public function test_category_data_create_test()
    // {
    //     $response = $this->postJson('/api/createCategory',['name' => 'window']);

    //     $response->assertStatus(201);
    // }

    // public function test_category_data_update_test()
    // {
    //     $response = $this->putJson('/api/updateCategory/3',['name' => 'engine']);

    //     $response->assertStatus(200);
    // }

    // public function test_category_data_delete_test()
    // {
    //     $response = $this->deleteJson('/api/deleteCategory/3');

    //     $response->assertStatus(204);
    // }

    // public function test_category_not_found_test_by_update()
    // {
    //     $response = $this->putJson('/api/updateCategory/3',['name' => 'engine']);

    //     $response->assertNotFound();
    // }

    // public function test_category_not_found_test_by_delete()
    // {
    //     $response = $this->deleteJson('/api/deleteCategory/3');

    //     $response->assert
    // }

    // public function test_category_data_base_output_test(){
    //     $response = $this->getJson('/api/showCategories');

    //     $response->assertStatus(500);
    // }
}
