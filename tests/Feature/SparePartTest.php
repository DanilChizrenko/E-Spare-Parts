<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SparePartTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sparepart_data_output_test()
    {
        $response = $this->getJson('/api/showSpareParts');

        $response->assertStatus(200);
    }
    
    // public function test_sparepart_data_create_test()
    // {
    //     $response = $this->postJson('/api/createSparePart',['name' => 'limfurder']);

    //     $response->assertStatus(201);
    // }

    // public function test_sparepart_data_update_test()
    // {
    //     $response = $this->putJson('/api/updateSparePart/2',['name' => 'engine']);

    //     $response->assertStatus(200);
    // }

    // public function test_sparepart_data_delete_test()
    // {
    //     $response = $this->deleteJson('/api/deleteSparePart/2');

    //     $response->assertStatus(204);
    // }
}
