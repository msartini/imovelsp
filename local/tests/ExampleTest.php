<?php

use App;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
    }
        
        
    public function testSoma()
    {
        $calculo = new App\Http\Controllers\ProfileController();
        $this->assertEquals(7, $calculo->soma(3.5, 3.5));
    }
}

