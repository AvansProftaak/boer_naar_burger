<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Shop $shop)
    {
        return view('shop.step1', compact('shop'));
    }

    public function shopStep2(Shop $shop)
    {
        return view('shop.step2', compact('shop'));
    }

    public function shopStep3(Shop $shop)
    {
        return view('shop.step3', compact('shop'));
    }

    public function shopSuccess(Shop $shop)
    {
        return view('shop.success', compact('shop'));
    }

    public function shopFailure(Shop $shop)
    {
        return view('shop.failure', compact('shop'));
    }
}
