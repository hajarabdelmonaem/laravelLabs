<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_address;
use Auth;

class User_addressController extends Controller
{
    //
    public function create(){
        return view('address.create');
    }

    public function store(Request $request){
        // dd($request);
        $address = new User_address;
        $address->addresses=$request->addresses;
        $address->user_id=@auth::user()->id;
        $address->save();
        return redirect()->route('home');
    }

    public function update(Request $request,$address_id){
        $address=User_address::find($address_id);
        $address->addresses=$request->addresses;
        $address->save();
        return redirect()->route('home');
    }

    public function edit($address_id){
        $address=User_address::find($address_id);
        if (@auth::user()->id == $address->user_id){
            return view('address.edit',['address'=> $address]);
        }
        else{
            echo("unauthurized edit");
            return redirect()->route('home');
        }
    }

    public function destroy($address_id){
        $address=User_address::find($address_id);
        if (@auth::user()->id == $address->user_id){
            $address->delete();
            return redirect()->route('home');
        }
        else{
            echo("unauthurized delete");
            return redirect()->route('home');
        }
    }
}
