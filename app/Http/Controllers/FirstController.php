<?php

namespace App\Http\Controllers;

use App\Services\ApiConnection;

class FirstController extends Controller
{
    protected $apiConnection;

    public function __construct(ApiConnection $apiConnection)
    {
        $this->apiConnection = $apiConnection;
    }

    public function index()
    {
        // Get the API connection status
        return "FirstController: " . $this->apiConnection->getConnectionStatus();
    }
}
