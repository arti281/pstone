<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('frontend.home');
    }
    public function account(Request $request)
    {
        return view('frontend.account');
    }
    public function wishlist(Request $request)
    {
        return view('frontend.wishlist');
    }
    public function checkout(Request $request)
    {
        return view('frontend.checkout');
    }
    public function register(Request $request)
    {
        return view('frontend.registration');
    }
    public function about(Request $request)
    {
        return view('frontend.aboutus');
    }
    public function radha(Request $request)
    {
        return view('frontend.radha-krishna-statues');
    }
    public function hanumanji(Request $request)
    {
        return view('frontend.hanumanji-statues');
    }
    public function durga(Request $request)
    {
        return view('frontend.durga-maa-stone-statues');
    }
    public function human(Request $request)
    {
        return view('frontend.human-stone-statues');
    }
}
