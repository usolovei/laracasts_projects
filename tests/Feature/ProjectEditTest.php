<?php

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectEditTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->put('projects/2', ['title'=>'test', 'description'=>'this is a test', '_token' => csrf_token()]);

        $response->assertStatus(302);
    }
}
