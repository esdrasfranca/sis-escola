<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view(VIEWS_DIRECTORY['home'] . '/index');
    }
}
