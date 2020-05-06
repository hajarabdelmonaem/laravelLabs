<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_contact;
use App\User;
use Auth;

class User_contactController extends Controller
{
    //
    public function create(){
        $userslist=User::where("id","!=",@auth::user()->id)->get();
        echo $userslist;
        return view('contact.create',['userslist' => $userslist]);
    }

    public function store(Request $request){
        // dd($request);
        $contact = new User_contact;
        $contact->name=$request->name;
        $contact->mobile=$request->mobile;
        $contact->user_id=@auth::user()->id;
        $contact->save();
        return redirect()->route('home');
    }

    public function update(Request $request,$contact_id){
        $contact=User_contact::find($contact_id);
        $contact->name=$request->name;
        $contact->mobile=$request->mobile;
        $contact->save();
        return redirect()->route('home');
    }

    public function edit($contact_id){
        $contact=User_contact::find($contact_id);
        if (@auth::user()->id == $contact->user_id){
            return view('contact.edit',['contact'=> $contact]);
        }
        else{
            echo("unauthurized edit");
            return redirect()->route('home');
        }
    }

    public function destroy($contact_id){
        $contact=User_contact::find($contact_id);
        if (@auth::user()->id == $contact->user_id){
            $contact->delete();
            return redirect()->route('home');
        }
        else{
            echo("unauthurized delete");
            return redirect()->route('home');
        }
    }
}
