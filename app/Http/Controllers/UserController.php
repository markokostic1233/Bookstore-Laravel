<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function view(){
        return view('register');
    }
    public function login(){
        return view('login');
    }


    public function loginPage(Request $request){

        $name = $request->input('name');
        $password = $request->input('password');

        $request->session()->put('name', $request->input('name'));

        $data = DB::select('select id from users where name =? and password =?' ,[$name, $password]);

        if(count($data)){

            $user = User::where('name','=',$name)->first();
            Auth::loginUsingId($user->id, TRUE);
            return redirect('/bookstore');

        }else{
            return redirect('/login');
        }

    }

    public function insert(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return redirect('/login');


    }

    public function logout(){

        Auth::logout();
        return redirect('/login');

    }
}
