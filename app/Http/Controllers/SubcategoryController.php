<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    public function index(){
        $subcategories = Subcategory::with('hasCategory')->get();
        return view('subcategory')->with('subcategories', $subcategories);
    }
}
