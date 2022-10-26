<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManufacturerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_manufacturer_data_output_test()
    {
        $response = $this->getJson('/api/showManufacturers');

        $response->assertStatus(200);
    }
    
    // public function test_manufacturer_data_create_test()
    // {
    //     $response = $this->postJson('/api/createManufacturer',['name' => 'limfurder']);

    //     $response->assertStatus(201);
    // }

    // public function test_manufacturer_data_update_test()
    // {
    //     $response = $this->putJson('/api/updateManufacturer/2',['name' => 'engine']);

    //     $response->assertStatus(200);
    // }

    // public function test_manufacturer_data_delete_test()
    // {
    //     $response = $this->deleteJson('/api/deleteManufacturer/2');

    //     $response->assertStatus(204);
    // }

    // public function test_manufacturer_not_found_test_by_update()
    // {
    //     $response = $this->putJson('/api/updateManufacturer/2',['name' => 'engine']);

    //     $response->assertNotFound();
    // }

    // public function test_manufacturer_not_found_test_by_delete()
    // {
    //     $response = $this->deleteJson('/api/deleteManufacturer/2');

    //     $response->assertNotFound();
    // }

    // public function test_manufacturer_data_base_output_test(){
    //     $response = $this->getJson('/api/showManufacturers');

    //     $response->assertStatus(500);
    // }
}
