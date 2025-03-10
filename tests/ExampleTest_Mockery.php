<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class ExampleTest_Mockery extends MockeryTestCase {
    public function tearDown(): void {
        Mockery::close();
    }

    public function testExample() {
        $this->assertTrue(true);
    }
}