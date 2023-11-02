<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::all(); // Replace 'YourModel' with your actual model.
        return view('shop', ['products' => $data]);
    }
    public function indexAdmin()
    {
        $data =  Products::with('category')->get();
        return view('admin.admin-products', ['products' => $data]);
    }

    public function indexDetail(String $id)
    {
        $data = Products::where('id', $id)->get(); // Replace 'YourModel' with your actual model.
        return view('shop-details', ['products' => $data]);
    }

    public function indexDetailAdmin(String $id)
    {
        $data = Products::where('id', $id)->get(); // Replace 'YourModel' with your actual model.
        return view('admin.admin-productsDetail', ['products' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProduct = new products;
        $newProduct->name = $request->input("name");
        $newProduct->price = intval($request->input("price"));
        $newProduct->description = $request->input("description");
        $newProduct->id_category = intval($request->input("id_category"));
        $newProduct->picture = $request->input("image");
        $newProduct->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {

        $existingProduct = products::find($id);
        switch ($existingProduct) {
            case true:
                $existingProduct->name = $request->input("name");
                $existingProduct->price = $request->input("price");
                $existingProduct->picture = $request->input("image");
                $existingProduct->description = $request->input("description");
                $existingProduct->id_category = intval($request->input("id_category"));
                $existingProduct->save();
                return redirect()->back();
            default:
                return "Không tìm thấy sản phẩm";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $existingProduct = products::find($id);
        switch ($existingProduct) {
            case true:
                $existingProduct->delete();
                return redirect()->back();
            default:
                return "Không tìm thấy sản phẩm";
        }
    }
}
