<?php

namespace App\Services;

class ApiConnection
{
    protected $connection;

    public function __construct()
    {
        \Log::info('ApiConnection instance created.');
        // Simulate an expensive operation like establishing a connection
        $this->connection = $this->connectToApi();
    }

    public function connectToApi()
    {
        return "Connected to API";
    }

    public function getConnectionStatus()
    {
        return $this->connection;
    }
}