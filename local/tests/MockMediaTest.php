<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MockMediaTest
 *
 * @author marciosartini
 */
use App;

class MockMediaTest extends TestCase {
    public function testIndexActionBindsUsersFromRepository() {
        $repository = Mockery::mock('UserRepositoryInterface');
        $repository->shouldReceive('all')->once()->andReturn(array('foo'));
        App::instance('UserRepositoryInterface', $repository);
        
        $response = $this->action('GET', 'MediaController@index');
        
        $this->assertResponseOk();
        $this->assertViewHas('titulo');
        $this->assertViewHas('files');
        $this->assertViewHas('primeiro');
        
    }
    
}
