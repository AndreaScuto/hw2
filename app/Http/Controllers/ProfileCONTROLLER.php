<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Article, App\Models\Comment, App\Models\User;
class ProfileCONTROLLER extends BaseController
{

    public function profile()
    {
        if (!Session::has('user_id')) {
            return redirect('login');
        }
        $user = User::find(session('user_id'));
        return view('profile')->with('user',$user);
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
    
}
