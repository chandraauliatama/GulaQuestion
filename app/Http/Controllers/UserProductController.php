<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\UserProduct;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $userProduct = auth()->user()->userProducts()->create($request->all());
        $userProduct = UserProduct::create($request->all());
        if ($request->hasFile('image1')) {
            $userProduct->addMediaFromRequest('image1')->toMediaCollection('images1');
        }
        if ($request->hasFile('image2')) {
            $userProduct->addMediaFromRequest('image2')->toMediaCollection('images2');
        }

        Notification::make() 
            ->title('Terimakasih telah membantu mengisi data produk. Kami akan melakukan peninjauan')
            ->success()
            ->send(); 

        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('productdetail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
