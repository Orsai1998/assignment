<?php

namespace App\Http\Controllers;
use App\categories;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Collective\Html\Eloquent\FormAccessible;    

class ShowData extends Controller
{
    public function show()
    {
    	$categories =categories::all();
    	return view('index',['categories' => $categories])->with('title','Все категории');
    }
         
}
