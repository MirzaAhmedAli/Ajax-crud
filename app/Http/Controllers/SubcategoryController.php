<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SubcategoryRequest;

class SubcategoryController extends Controller
{
    public function index(){
        $subcategories = Subcategory::with('hasCategory')->get();
        return view('subcategory')->with('subcategories', $subcategories);
    }

    public function store(SubcategoryRequest $request){

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filemname = time().'.'.$extension;
            $path = 'uploads/category/';
            $file->move($path,$filemname);
        }

        $subcategory = Subcategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$filemname,
            'category_id' => $request->category_id,
        ]);

        return response()->json(['subcategory' => $subcategory], 201);
        
    }
}
