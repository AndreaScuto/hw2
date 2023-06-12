<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Article, App\Models\Comment, App\Models\User;

class AccessCONTROLLER extends BaseController
{
    public function login_form()
    {
        if(session('user_id'))
        {
            return redirect('home');
        }
        $error = session::get('error');
        session::forget('error');
        return view('login')->with('error',$error);
    }

    public function signup_form()
    {
        if(session('user_id'))
        {
            return redirect('home');
        }
        $error = session::get('error');
        session::forget('error');
        return view('signup')->with('error',$error);
        
    }

    public function login()
    {
        if (strlen(request('username')) == 0)
        {
            session::put('error','Devi inserire il tuo username');
            return redirect('login')->withInput();
        }
        else if (strlen(request('password')) < 8)
        {
            session::put('error','La password deve essere lunga almeno 8 caratteri');
            return redirect('login')->withInput();
        }

        $user = User::where('username', request('username'))->first();
        if(isset($user))
        {
            if(password_verify(request('password'),$user->password))
            {
                session::put('user_id',$user->id);
                return redirect('home');
            }
        }

        session::put('error','Credenziali non valide');
        return redirect('login')->withInput();
    }


    public function signup ()
    {
        //Verifica dati
        if (strlen(request('name')) == 0)
        {
            session::put('error','Devi inserire il tuo nome');
            return redirect('signup')->withInput();
        }
        else if (strlen(request('surname')) == 0)
        {
            session::put('error','Devi inserire il tuo cognome');
            return redirect('signup')->withInput();
        }
        else if (strlen(request('username')) == 0)
        {
            session::put('error','Devi inserire il tuo username');
            return redirect('signup')->withInput();
        }
        else if (strlen(request('password')) < 8)
        {
            session::put('error','La password deve essere lunga almeno 8 caratteri');
            return redirect('signup')->withInput();
        }
        else if (request('password') != request('confirm_password'))
        {
            session::put('error','Le password non coincidono');
            return redirect('signup')->withInput();
        }
        else if (User::where('username', request('username'))->exists())
        {
            session::put('error','Username già in uso');
            return redirect('signup')->withInput();
        }

        $user = new User;
        $user->nome = request('name');
        $user->cognome = request('surname');
        $user->username = request('username');
        $user->password = password_hash(request('password'),PASSWORD_BCRYPT);
        $user->save();

        session::put('user_id',$user->id);

        return redirect('home');
    }

}
