<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
   {
   	return 'ini index Category';
   }

   public function create()
   {
   	return view('category.create');
   	// resources / views / category / create.blade.php

   }

   public function store(Request $request)
   {

   }
}
