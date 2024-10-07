<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        return view ('frontend.index');
    }
    public function productDetails ()
    {
        return view ('frontend.product-details');
    }
    public function viewCart ()
    {
        return view ('frontend.view-cart');
    }
    public function checkout ()
    {
        return view ('frontend.checkout');
    }
    public function dishes ()
    {
        return view ('frontend.dishes');
    }
    public function special ()
    {
        return view ('frontend.special');
    }
    public function comboOffer ()
    {
        return view ('frontend.combo-offer');
    }
    public function tableBook ()
    {
        return view ('frontend.table-book');
    }
    public function menu ()
    {
        return view ('frontend.menu');
    }
}
