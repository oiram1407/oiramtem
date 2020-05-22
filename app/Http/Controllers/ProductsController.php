<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductsController extends Controller
{
    //Construct
    public function __construct(){

    }

    public function productsList(Request $request){
      $q = $request->input('q');
      $cat = $request->input('cat');
      $br = $request->input('br');

      $data = array(
        'categories' => Cat::orderBy('name_category')->get(),
        'branches' => Branch::orderBy('name_branch')->get(),
        'searchv' => $q
      );

      return view('products-list', $data);
    }

    public function admProducts(Request $request){
      $products = Product::find(1);
      $q = $request->input('q');

      $data = array(
          'products' => DB::table('p_products')
                          ->join('p_categories', 'p_categories.id_category', '=', 'p_products.id_category')
                          ->join('p_branches', 'p_branches.id_branch', '=', 'p_products.id_branch')
                          ->where('product_name', 'like', '%'.$q.'%')
                          ->orderBy('id_product', 'desc')
                          ->paginate(15)
                          ->withPath('product-list?q='.$q),
          'search' => $q
      );

      return view('admin.products-list', $data);
    }
}
