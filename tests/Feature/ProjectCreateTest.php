<?php

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;

class ProjectCreateTest extends TestCase
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
        ])->post('projects', ['title' => 'testasdsad', 'description' => 'this is a test', '_token' => csrf_token()]);

        $response->assertStatus(302);
    }
}
