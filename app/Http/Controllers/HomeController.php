<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function getData(){
$data=date('Y-m-d');
//$response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=christiead546&token=7e9f8c3a8f2b8b351600e9e6448a4a2c&t=schedule&d=".$data."&league_id=1609");
$response = Http::get("https://api.soccersapi.com/v2.2/livescores/?user=frankojarkarta&token=5eebc5641ed361006aede1d7a53f4635&t=today");

return view('index',['response'=>$response]);

}
}
