<?php

use Paravel\Controller;
use Paravel\View;

class MainController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(17);

        return View::make('index', ['user' => $user]);
    }
}