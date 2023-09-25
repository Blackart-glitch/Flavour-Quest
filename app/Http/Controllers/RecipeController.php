<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

use function env;

class RecipeController extends Controller
{
    protected $client;
    protected $apiKey;
    protected $url;
    protected $user;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('SPOONACULAR_API_KEY');
        $this->url = rtrim(env('SPOONACULAR_API_URL'), '/');
    }

    public function home(Request $request)
    {
        $user_id = auth()->user()->profile;
        dd($user_id);
        try {
            // Send a GET request to the API endpoint with the necessary parameters
            $response = $this->client->request('GET', $this->url . '/recipes/random', [
                'query' => [
                    'apiKey' => $this->apiKey,
                    'number' => 12,
                ]
            ]);
        } catch (\Throwable $th) {
            $response = null;
        }

        // Get the response body as JSON for recipes
        if ($response) {
            $recipes = json_decode($response->getBody(), true);
        }

        // Process the data as needed
        return view('home', ['recipes' => $recipes['recipes'] ?? '']);
    }


    public function savedrecipes()
    {
    }

    public function newrecipes()
    {
    }

    public function communityrecipes()
    {
    }

    public function recentlyviewed()
    {
    }

    public function favourites()
    {
    }


















    public function index()
    {
        try {
            // Send a GET request to the API endpoint with the necessary parameters
            $response = $this->client->request('GET', $this->url . '/recipes/random', [
                'query' => [
                    'apiKey' => $this->apiKey,
                    'number' => 9,
                ]
            ]);

            // Get the response body as JSON
            $recipes = json_decode($response->getBody(), true);
            $recipes = $recipes['recipes'];
        } catch (\Throwable $th) {
            $recipes = null;
        }

        return view('getrecipe', ['recipes' => $recipes]);
    }

    /*     public function recipedata(Request $request)
    {
        // Retrieve the form data [ingredients] from the request
        $ingredients = $request->ingredients;

        // Split the ingredients string into an array of words
        $words = explode(',', $ingredients);

        // Array to store refined words
        $refinedWords = [];

        // Iterate over each word
        foreach ($words as $word) {
            // Remove leading spaces and commas
            $word = ltrim($word, ' ,');

            // Remove special characters
            $word = preg_replace('/[^A-Za-z0-9 ]/', '', $word);

            // Check if the refined word is not empty
            if (!empty($word)) {
                // Add the refined word to the array
                $refinedWords[] = $word;
            }
        }

        // Convert the refined words array back to a comma-separated string
        $refinedIngredients = implode(',', $refinedWords);


        // Send a GET request to the API endpoint with the necessary parameters
        $response = $this->client->request('GET', $this->url . '/recipes/findByIngredients', [
            'query' => [
                'apiKey' => $this->apiKey,
                'number' => 9,
                'ingredients' => $refinedIngredients,
            ]
        ]);

        // Get the response body as JSON
        $recipes = json_decode($response->getBody(), true);

        return view('getrecipe', ['recipes' => $recipes]);
    } */
}
