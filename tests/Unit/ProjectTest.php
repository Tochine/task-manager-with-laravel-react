<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
     /** @test */
    public function test_get_http_request_index()
    {
        $res = $this->get("/projects");
        $res->assertStatus(200);
    }

    /** @test */
    public function test_get_http_request_show()
    {
        $res = $this->get("/project/{project}");
        $res->assertStatus(200);
    }
}
