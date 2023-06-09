<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $baskets = Basket::get();
        // echo "<pre>";
        // print_r($baskets[0]->product);

        return view('frontend.basket', compact('baskets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $p_id = $request->prId;
        $u_id = auth()->user()->id;
        $product =  Product::find($p_id);

        $basket = Basket::where('product_id', $p_id)->where('user_id', $u_id)->first();



        if (!$basket) {
            Basket::create([
                "product_id" => $p_id,
                "qty" => 1,
                "price" => $product->sales_price,
                "user_id" => $u_id,
            ]);
        } else {
            $basket->qty += 1;
            $basket->price += $product->sales_price;
            $basket->save();
        }
        $basket_count = Basket::where('user_id', $u_id)->sum('qty');

        // return $basket;
        // return $basket_count;
        return response()->json(['basket_count' => $basket_count]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
