<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\Article, App\Models\Comment, App\Models\User;
use Illuminate\Http\Request;

class ArchivioCONTROLLER extends BaseController
{
    public function archivio()
    {
        if (!Session::has('user_id')) {
            return redirect('login');
        }
        $user = User::find(session('user_id'));
        return view('archivio')->with('user',$user);
    }

    public function gare()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://v1.formula-1.api-sports.io/races?season=2023&type=Race&timezone=Europe%2FRome',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'x-rapidapi-key: 4a7414a153db433937462623af36141c',
                'x-rapidapi-host: v1.formula-1.api-sports.io'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return response($response, 200)->header('Content-Type', 'application/json');
    }

    public function archivioRICERCA()
    {
        
        $anno = urlencode(request('Anno'));
        $tipo = urlencode(request('Tipo'));
        $url = "http://ergast.com/api/f1/" . $anno . "/" . $tipo . ".json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);

        curl_close($ch);

        return response($res, 200)->header('Content-Type', 'application/json');
    }

}
