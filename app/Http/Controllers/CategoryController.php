<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::withCount('hasSubcategories')->get();
        return view('category')->with('categories', $categories);
    }

    public function getCategories(){
        $categories = Category::all();  
        return response()->json($categories);    
    }

    public function store(CategoryRequest $request){

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filemname = time().'.'.$extension;
            $path = 'uploads/category/';
            $file->move($path,$filemname);
        }

        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filemname
        ]);

        return response()->json(['category' => $category], 201);
        
    }

    public function delete(){

    }
}
