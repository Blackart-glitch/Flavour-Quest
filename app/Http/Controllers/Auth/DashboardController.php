<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    protected $user;
    protected $client;
    protected $apiKey;
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('SPOONACULAR_API_KEY');
        $this->url = rtrim(env('SPOONACULAR_API_URL'), '/');
        $this->user = Auth::user(); // Corrected line
    }

    public function index()
    {
    }
}
