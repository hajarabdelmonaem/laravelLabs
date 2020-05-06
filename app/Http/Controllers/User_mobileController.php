<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_mobile;
use Auth;

class User_mobileController extends Controller
{
    //
    public function create(){
        return view('mobile.create');
    }

    public function store(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'mobiles' => 'required|unique:user_mobiles|digits:11|starts with:010,011,012',
        ]);
        $mobile = new User_mobile;
        $mobile->mobiles=$request->mobiles;
        $mobile->user_id=@auth::user()->id;
        $mobile->save();
        return redirect()->route('home');
    }

    public function update(Request $request,$mobile_id){
        $mobile=User_mobile::find($mobile_id);
        $mobile->mobiles=$request->mobiles;
        $mobile->save();
        return redirect()->route('home');
    }

    public function edit($mobile_id){
        $mobile=User_mobile::find($mobile_id);
        if (@auth::user()->id == $mobile->user_id){
            return view('mobile.edit',['mobile'=> $mobile]);
        }
        else{
            echo("unauthurized edit");
            return redirect()->route('home');
        }
    }

    public function destroy($mobile_id){
        $mobile=User_mobile::find($mobile_id);
        if (@auth::user()->id == $mobile->user_id){
            $mobile->delete();
            return redirect()->route('home');
        }
        else{
            echo("unauthurized delete");
            return redirect()->route('home');
        }
    }
}
