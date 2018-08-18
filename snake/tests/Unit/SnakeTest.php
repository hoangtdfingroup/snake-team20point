<?php

namespace Tests\Unit;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class SnakeTest extends TestCase
{

    public function testOnePlusOne(){
        $this->assertEquals(1,1);
    }
}
