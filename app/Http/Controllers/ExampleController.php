<?php

namespace App\Http\Controllers;
use App\Example;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function hello()
    {
          $users = Example::all()->toJson();

          echo $users;
    }
}
