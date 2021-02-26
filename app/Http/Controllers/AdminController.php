<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $data = $request->all();
        $validate = $this->validateData($request);
       if (!$validate):
           $check_email = User::where(['email'=>$data['email']])->count();
            if ($check_email):
                if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>1]))
                    {
                      //  Session::put('adminSession',$data['email']);
                        return redirect('/dashboard');
                    }
                else
                    {
                        return redirect('/control')->with('flash_message_error','Email ve Parol duz deyil');
                    }
            else:
                return redirect('/control')->with('flash_message_error','Email movcud deyil');
            endif;
       else:
           return redirect('/control')->with('flash_message_error','Zehmet olmasa butun xanalari doldurun');
       endif;

    }
    private function validateData(Request $request)
    {
        $validator = Validator::make(
            $request->all(), [
                'email' => 'required|string',
                'password' => 'required|string|min:8',
            ]
        );

        if ($validator->fails()) :
            return $validator->errors();
        else :
            return false;
        endif;
    }

}
