<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_model_data_output_test()
    {
        $response = $this->getJson('/api/showModels');

        $response->assertStatus(200);
    }
    
    // public function test_model_data_create_test()
    // {
    //     $response = $this->postJson('/api/createModel',['name' => 'limfurder','typefuel' => 'diesel','year' => '2022-01-01']);

    //     $response->assertStatus(201);
    // }

    // public function test_model_data_update_test()
    // {
    //     $response = $this->putJson('/api/updateModel/4',['name' => 'limfurder','typefuel' => 'petrol','year' => '2022-01-01']);

    //     $response->assertStatus(200);
    // }

    // public function test_model_data_delete_test()
    // {
    //     $response = $this->deleteJson('/api/deleteModel/5');

    //     $response->assertStatus(204);
    // }

    // public function test_model_not_found_test_by_update()
    // {
    //     $response = $this->putJson('/api/updateModel/2',['name' => 'limfurder','typefuel' => 'petrol','year' => '2022-01-01']);

    //     $response->assertNotFound();
    // }

    // public function test_model_not_found_test_by_delete()
    // {
    //     $response = $this->deleteJson('/api/deleteModel/2');

    //     $response->assertNotFound();
    // }

    // public function test_model_data_base_output_test(){
    //     $response = $this->getJson('/api/showModels');

    //     $response->assertStatus(500);
    // }
}
