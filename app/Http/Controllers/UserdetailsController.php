<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserdetailsController extends Controller
{
    //
    public function getUser()
    {
        return auth()->user();
    }

    public function getUserId()
    {
        $user = $this->getUser();
        return $user ? $user->id : null;
    }

    public function getUserEmail()
    {
        $user = $this->getUser();
        return $user ? $user->email : null;
    }

    public function getUserName()
    {
        $user = $this->getUser();
        return $user ? $user->name : null;
    }
}
