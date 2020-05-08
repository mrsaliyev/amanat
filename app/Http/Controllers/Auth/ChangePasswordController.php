<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    public function index(){
    	return view('auth.passwords.change');
    }

    public function changepassword(Request $request){
        $this->validate($request,[
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPass = Auth::users()->password;
        if (Hash::check($request->oldpassword, $hashedPass)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg', ' Пароль изменен успешно!');
        }else{
            return redirect()->back()->with('ErrorMsg', ' Пароль не изменен!');
        }
    }
}

