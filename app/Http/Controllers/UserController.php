<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    protected $name;
    protected $id;

    //Handles the user data and personalized requests
    public function __construct()
    {
        $this->name = 'null';
    }

    public function getuserdetails()
    {
    }
}
