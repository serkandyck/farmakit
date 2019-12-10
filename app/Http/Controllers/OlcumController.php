<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Olcum;
use App\SensorType;

class OlcumController extends Controller
{
    public function index(Request $request) {
    	$agent = $request->header('user-agent');

    	if(!$agent == 'ESP8266HTTPClient') {
    		return response()->json(['status' => 'Unauthorized.']);
    	}

    	if(!$request->kod == 'Fk3306') {
    		return response()->json(['status' => 'Unauthorized.']);
    	}
        $olcumDolap = new Olcum();
        $sensorTip = SensorType::where('baslik', 'Dolap')->first();
        $olcumDolap->type_id = $sensorTip->id;
        $olcumDolap->cihaz_id = $request->id;
        $olcumDolap->deger = $request->dolap;
        $olcumDolap->tarih = Carbon::now();
        $olcumDolap->save();

        $olcumNem = new Olcum();
        $sensorTip = SensorType::where('baslik', 'Nem')->first();
        $olcumNem->type_id = $sensorTip->id;
        $olcumNem->cihaz_id = $request->id;
        $olcumNem->deger = $request->nem;
        $olcumNem->tarih = Carbon::now();
        $olcumNem->save();

        $olcumOrtam = new Olcum();
        $sensorTip = SensorType::where('baslik', 'Ortam')->first();
        $olcumOrtam->type_id = $sensorTip->id;
        $olcumOrtam->cihaz_id = $request->id;
        $olcumOrtam->deger = $request->ortam;
        $olcumOrtam->tarih = Carbon::now();
        $olcumOrtam->save();
        if(!$request->id == 'nan') {
            if(!$request->dolap == 'nan') {
                
            }

            if(!$request->nem == 'nan') {
                
            }

            if(!$request->ortam == 'nan') {
                
            }

            
        }

        return response()->json(['status' => 'Successfull.']);
    }
}
