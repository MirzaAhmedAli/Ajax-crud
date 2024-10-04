<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CategoryAPIController extends Controller
{
    public function getCategory()
     {
             $query = Category::get();
             return DataTables::of($query)
             ->addColumn('action', function($row){
                 return [
                     'edit_url' => url('users/'.$row->id.'/edit'),
                     'delete_url' => url('users/'.$row->id.'/delete'),
                 ];
             })->make(true);
     }
}
