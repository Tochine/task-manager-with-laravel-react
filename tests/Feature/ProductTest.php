<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Project;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     /** @test */
    //public function test_projects_listed_successfully()
    //{
        // $this->withoutExceptionHandling();
      
        // $res = $this->json("GET", "/api/projects");
        // $res->assertStatus(200);
        // $res->assertJsonStructure([
        //     [
        //         "message" => "Projects details",
        //         'id',
        //         'name',
        //         'description',
        //         'status',
        //         'user_id',
        //         'created_at',
        //         'update_at'
        //     ]
        // ]);

        // $this->withoutExceptionHandling();

        // $response = $this->json('GET', '/api/projects');
        // //dd($response);
        // $response->assertStatus(200);

        // $response->assertJsonStructure([
        //     [
        //         'id',
        //         'name',
        //         'description',
        //         'status',
        //         'user_id',
        //         'created_at',
        //         'update_at'
        //     ]
        // ]);

        // $response->assertJson(
        //     [
        //         "data" =>[
        //             'id' => 1,
        //             'name' => 'Tochi Adams',
        //             'description' => 'Bla bla bla',
        //             'status' => 1,
        //             'user_id' => 1,
        //             'created_at' => '2021-02-03 20:23:19'

        //         ],
        //         'message' => 'Retreived Successfully'
        //     ]
        // );
    //}

    /** test */
    // public function test_project_created_successfully()
    // {
    //     $project = factory(Project::class)->create();
    //     //$this->actingAs($user, 'api');

    //     factory(Project::class)->create([
    //         "name" => "Iron man",
    //         "description" =>  "Blah blah blah",
    //         "status" => true,
    //         "user_id" => 8,
    //         "created_at" => now()
    //     ])

    // }

}
