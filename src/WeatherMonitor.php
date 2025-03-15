<?php
namespace UnitTestingApp;

class WeatherMonitor {
    protected $temp_service;
    
    public function __construct(TemperatureService $temp_service) {
        $this->temp_service = $temp_service;
    }

    public function getAvgTemperature(string $start_time, string $end_time) : int {
        $start_temp = $this->temp_service->getTemperature($start_time);
        $end_temp = $this->temp_service->getTemperature($end_time);

        $avg_temp = ($start_temp + $end_temp)/2;
        return $avg_temp;
    }

}