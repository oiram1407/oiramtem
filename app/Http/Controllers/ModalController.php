<?php

namespace App\Http\Controllers;
use Response;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Branch;
use App\Category as Cat;
use App\Product;

class ModalController extends Controller
{
    public function addProductForm(){
        $data = array(
          'branches' => Branch::orderBy('name_branch')->get(),
          'categories' => Cat::orderBy('name_category')->get()
        );

        return view('modals.admin.add-product', $data);
    }

    public function addProduct(Request $request){

        $validator = Validator::make($request->all(),[
            'product_name' => 'required|min:8|max:255',
            'id_branch' => 'required|integer|exists:p_branches,id_branch',
            'id_category' => 'required|integer|exists:p_categories,id_category',
            'product_price_public' => 'required|min:0',
            'product_price_provider' => 'required|min:0',
        ], [
            'product_name.required' => 'Debes escribir el nombre del producto',
            'product_name.min' => 'El nombre del producto debe contener mínimo 8 caracteres',
            'product_name.max' => 'El nombre del producto debe contener máximo 255 caracteres',
            'id_branch.required' => 'Debes seleccionar una marca',
            'id_branch.exists' => 'Debes seleccionar una marca válida',
            'id_category.required' => 'Debes seleccionar una categoría',
            'id_category.exists' => 'Debes seleccionar una categoría válida',
            'product_price_public.required' => 'Debes escribir el precio al público',
            'product_price_public.min' => 'El pecio al público debe ser válido',
            'product_price_provider.required' => 'Debes escribir el precio de proveedor',
            'product_price_provider.min' => 'El pecio de proveedor debe ser válido'
        ]);

        if ($validator->fails())
            return Response::json(['errors' => $validator->errors()]);

        $input = $request->all();
        $input['id_user'] = Auth::user()->id_user;

        $product = Product::create($input);

        return Response::json(['success' => '1']);
    }

    public function setStockForm($id = null){
        $data = array(
          'p' => Product::where('id_product', $id)->first()
        );

        return view('modals.admin.set-stock', $data);
    }

}
