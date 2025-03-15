<?php

use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use UnitTestingApp\TemperatureService;
use UnitTestingApp\WeatherMonitor;

class WeatherMonitorTest extends TestCase{
    public function tear() : void {
        Mockery::close();
    }

    public function testCorrectAvergaeIsReturned() {
        $temperatureService = $this->createMock(TemperatureService::class);
        $map = [
            ['12:00', 20],
            ['14:00', 26]
        ];
        $temperatureService->expects($this->exactly(2))
                           ->method('getTemperature')
                           ->willReturnMap($map);
        
        $weather = new WeatherMonitor($temperatureService);
        $this->assertEquals(23, $weather->getAvgTemperature('12:00', '14:00'));
    }

    public function testCorrectAvergaeIsReturnedWithMockery() {
        $temperatureService = Mockery::mock(TemperatureService::class);
        $temperatureService->shouldReceive('getTemperature')->once()->with('12:00')->andReturn(20);
        $temperatureService->shouldReceive('getTemperature')->once()->with('14:00')->andReturn(26);

        $weather = new WeatherMonitor($temperatureService);
        $this->assertEquals(23, $weather->getAvgTemperature('12:00', '14:00'));
    }
}