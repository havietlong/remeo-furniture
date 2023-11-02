<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(session('cart')) ;
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
{   $id = $request->input('id');
    $item = $request->input('name');
    $quantity = $request->input('quantity');
    $price = $request->input('price');

    // Retrieve the current cart items and total from the session or initialize them if they don't exist
    $cartItems = $request->session()->get('cart', []);
    $total = $request->session()->get('total', 0);

    // Check if the item already exists in the cart
    $existingItemKey = null;

    foreach ($cartItems as $key => $cartItem) {
        if ($cartItem['item'] === $item) {
            $existingItemKey = $key;
            break;
        }
    }

    // Calculate the subtotal for the current item
    $subtotal = $quantity * $price;

    // If the item exists, update its quantity and subtotal
    if ($existingItemKey !== null) {
        $cartItems[$existingItemKey]['quantity'] += $quantity;
        $cartItems[$existingItemKey]['subtotal'] += $subtotal;
    } else {
        // If the item doesn't exist, add it as a new item in the cart
        $cartItems[] = [
            'id' => $id,
            'item' => $item,
            'quantity' => $quantity,
            'price' => $price,
            'subtotal' => $subtotal,
        ];
    }

    // Calculate the total of all subtotals
    $total = 0;

    foreach ($cartItems as $cartItem) {
        $total += $cartItem['subtotal'];
    }

    // Store the updated cart array and total back into the session
    $request->session()->put('cart', $cartItems);
    $request->session()->put('total', $total);

    // dd(session('cart'));
    // return response()->json([
    //     'cartItems' => $cartItems
    // ]);
    return redirect()->back();
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function reset()
    {
        session()->forget('cart');
        return redirect("/");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
