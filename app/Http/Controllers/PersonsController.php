<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Person;
class PersonsController extends Controller
{
    //
    public function index()
    {
        //return view ('index');
        $people = Person::All();
        dd($people);
        //echo phpinfo();
        //echo "hiiiiiiiiiiii";
    }
}
