<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category as Cat;

class CategoryController extends Controller
{
    public function categoryList(){
      $data = array(
        'categories' => Cat::orderBy('name_category')->paginate(15)
      );

      return view('admin.categories-list', $data);
    }
}
