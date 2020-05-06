<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_mobile;
use App\User_address;
use App\User_contact;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mobiles = User_mobile::where("user_id","=",@auth::user()->id)->get();
        $addresses = User_address::where("user_id","=",@auth::user()->id)->get();
        $contacts= User_contact::where("user_id","=",@auth::user()->id)->get();
        echo $contacts;
        return view('home',['mobiles' => $mobiles,'addresses' => $addresses,'contacts'=>$contacts]);

    }
}
