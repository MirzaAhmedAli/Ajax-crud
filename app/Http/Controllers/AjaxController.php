<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->get();
        return view('test')->with('categories', $categories);
    }

    public function getSubcategories($id){
        $subcategories = Subcategory::where('category_id', $id)->get();
        return response()->json($subcategories);    
    }


    public function image(Request $request){
        $filemname = null;
        $path = null;

        $request->has('image');
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filemname = time().'.'.$extension;
            $path = 'uploads/category/';
            $file->move($path,$filemname);
    }
}

