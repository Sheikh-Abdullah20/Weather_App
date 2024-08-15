<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class WeatherController extends Controller
{
    public function index(Request $request){
        $data = [];
        if($request->city){
            // return $request->city;
            $response = Http::withHeaders([
                "x-rapidapi-host" => "open-weather13.p.rapidapi.com",
                "x-rapidapi-key"  => "09da82b1dfmshf49a2563f0fdbadp1c968bjsnfd2f805f70ec"
            ])->get("https://open-weather13.p.rapidapi.com/city/{$request->city}/PK");
            $data = $response;
            // return $data;
        }

        
        return view('weather',compact('data'));
    }
}
