<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Index(): string
    {
        return view('welcome_message');
    }
}
