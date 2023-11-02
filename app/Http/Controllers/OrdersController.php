<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Orders_detail;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
            $orders = orders::orderBy('id', 'DESC')
                ->join('user', 'orders.id_user', '=', 'user.id')
                ->join('status', 'orders.id_status', '=', 'status.id')
                ->select('orders.*', 'orders.id_user', 'user.name', 'orders.price','status.name')
                ->get();
                // return $orders;
                return view('admin.admin-dataTable', ['orders' => $orders]);
            
    }

    public function indexChartData()
    {
        $data = orders::selectRaw('DATE(created_at) as date, SUM(price) as total_price')
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

    return response()->json($data);
    }

    public function indexChartData_Week()
    { $data = orders::selectRaw('YEAR(created_at) as year, WEEK(created_at) as week, SUM(price) as total_price')
        ->groupBy('year', 'week')
        ->orderBy('year', 'asc')
        ->orderBy('week', 'asc')
        ->get();

    return response()->json($data);
    }

    public function indexChartData_Month()
{
    $data = orders::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(price) as total_price')
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get();

    return response()->json($data);
}


    public function checkOut(Request $request)
    {
        $f_name = $request->input("first_name");
        $l_name = $request->input("last_name");
        $receiver = $f_name . $l_name;

        $newOrder = new Orders;
        $newOrder->price = $request->input("price");
        $newOrder->id_status = 1;
        $newOrder->id_user = intval($request->input("id_user"));
        $newOrder->receiver = $receiver;
        $newOrder->address = $request->input("address");
        $newOrder->phone_number =  intval($request->input("phoneNumber"));
        $newOrder->save();

        $latestOrder = Orders::latest()->first();
        $order_id = $latestOrder->id;

        $cart = session('cart');

        foreach ($cart as $item) {
            Orders_detail::create([
                'id_order' => $order_id,
                'id_product' => $item['id'],
                'quantity' => $item['quantity'],
                
            ]);
        }

        session()->forget('cart');
        
        return redirect()->back();


    }

    public function approveOrder(String $id)
    {
        $order = Orders::where('id', $id)->first();
        
        if ($order) {
            $order->id_status = 2;
            $order->save();
        }
    
        // Handle the case where the order with the specified ID was not found.
        return redirect()->back();

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
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $order = Orders::where('id', $id)->first();
        
        if ($order) {
            $order->id_status = 3;
            $order->save();
        }
    
        // Handle the case where the order with the specified ID was not found.
        return redirect()->back();

    }
}
