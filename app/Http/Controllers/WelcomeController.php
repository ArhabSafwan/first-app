<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        
        // how to fetch data from database 

        //  1 Using raw Query
        // $users = DB::select('select * from users');
        //   dd($users);
        
        //  2 query builder
           $users = DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
           dd($users);
        //  3 eloquent orm        
    }
}
