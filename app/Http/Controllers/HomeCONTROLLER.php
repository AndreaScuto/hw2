<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Article;
use App\Models\User;
use App\Models\Comment;

class HomeCONTROLLER extends BaseController
{
    public function home()
    {
        if (!Session::has('user_id')) {
            return redirect('login');
        }
        $user = User::find(session('user_id'));
        return view('home')->with('user',$user);
    }


    public function profile()
    {
        if (!Session::has('user_id')) {
            return redirect('login');
        }
        $user = User::find(session('user_id'));
        return view('profile')->with('user',$user);
    }

    public function ultimi3ARTICOLI()
    {
        $ultimi3 = Article::ultimi3();
        return response()->json($ultimi3);
    }

    public function commentiARTICOLI()
    {
        $article = new Article();
        $commenti = $article->commentiUltimi3();

        return response()->json($commenti);
    }

    public function inviaCOMMENTO()

    {

        $commento= Comment::create([
                'id_article_fk' => request('id_articolo'),
                'id_user_fk' => session('user_id'),
                'testo' => request('commentoINSERIRE')
            ]);
        $commento->save();
       return response()->json(['Messaggio' => 'Commento aggiunto!'], 200);
    }

    
    public function ricerca()
    {
        $titolo = request('titoloCERCATO');
        
        $articoloCERCATO = Article::where('titolo', 'like', '%' . $titolo . '%')->get();

        return response()->json($articoloCERCATO);
    }
}
