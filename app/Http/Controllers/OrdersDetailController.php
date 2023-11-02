<?php

namespace App\Http\Controllers;

use App\Models\Orders_detail;
use Illuminate\Http\Request;

class OrdersDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function displayOrder_Detail(String $id)
    {
        $orderDetails = Orders_detail::where('id_order', $id)
        ->join('products', 'orders_detail.id_product', '=', 'products.id')
        ->select('products.*', 'orders_detail.*')
        ->get();
        return view('user-orderDetail', ['orderDetails' => $orderDetails]);
    }

    public function displayOrder_DetailAdmin(String $id)
    {
        $orderDetails = Orders_detail::where('id_order', $id)
        ->join('products', 'orders_detail.id_product', '=', 'products.id')
        ->select('products.*', 'orders_detail.*')
        ->get();
        return view('admin.admin-dataTableDetail', ['orderDetails' => $orderDetails]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders_detail $orders_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders_detail $orders_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders_detail $orders_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders_detail $orders_detail)
    {
        //
    }
}
