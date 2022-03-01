<?php

namespace Tests\Feature;

use App\Models\Triangle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HandleDbTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insertSides()
    {

        $triangle = new Triangle();
        $createdTriangle = $triangle->create(['side_1'=> 19,'side_2'=> 12,'side_3'=>9, 'area'=>0.88]);
        $this->assertDatabaseHas('triangles', ['area' => $createdTriangle->area]);
        
    }
}
