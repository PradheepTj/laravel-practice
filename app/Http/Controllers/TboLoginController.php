<?php

namespace App\Http\Controllers;

use App\Models\TboLogin;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class TboLoginController extends Controller
{


    //$_SERVER['REMOTE_ADDR']
    public function authtbo(){
    $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])->post('https://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate', [

                'ClientId' => 'ApiIntegrationNew',
                'UserName'=> 'Hira',
                'Password'=> 'Hira@1234',
                 'EndUserIp' => '127.0.0.1'
        ]);

        // $collection=collect($response);
        // $TokenId=$collection('TokenId');
        // dump($TokenId);
        // return view('Login',[
        //     "TokenIds"=>$TokenId
        // ]);
        $data['response']=$response->json();
     //  print_r($data);
     echo "<pre>";
    print_r($data);
    echo "</pre>";
       dd($data);
       return redirect()->route('Authenticate');
       // $response = json_decode($response->getContent()) ;


       // print_r ("$data");






    }
}
