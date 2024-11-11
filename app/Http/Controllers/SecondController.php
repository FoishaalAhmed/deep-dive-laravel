<?php

namespace App\Http\Controllers;

use App\Services\ApiConnection;

class SecondController extends Controller
{
    protected $apiConnection;

    public function __construct(ApiConnection $apiConnection)
    {
        $this->apiConnection = $apiConnection;
    }

    public function index()
    {
        // Get the API connection status
        return "SecondController: " . $this->apiConnection->getConnectionStatus();
    }
}
