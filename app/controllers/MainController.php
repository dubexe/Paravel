<?php

use Paravel\Controller;
use Paravel\View;

class MainController extends Controller
{
    public function index()
    {
        return View::make('index');
    }
}