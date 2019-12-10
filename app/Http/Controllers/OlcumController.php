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

        if(!$request->id == 'nan') {
            if(!$request->dolap == 'nan') {
                $olcumDolap = new Olcum();
                $sensorTip = SensorType::where('baslik', 'Dolap')->first();
                $olcumDolap->type_id = $sensorTip->id;
                $olcumDolap->cihaz_id = $request->id;
                $olcumDolap->deger = $request->dolap;
                $olcumDolap->tarih = Carbon::createFromFormat('Y-m-d H:i:s', $request->tarih. ' '. $request->saat)->toDateTimeString();
                if($olcumDolap->tarih < '2019-01-01') {
                    $olcumDolap->tarih = Carbon::now();
                }
                $olcumDolap->save();
            }

            if(!$request->nem == 'nan') {
                $olcumNem = new Olcum();
                $sensorTip = SensorType::where('baslik', 'Nem')->first();
                $olcumNem->type_id = $sensorTip->id;
                $olcumNem->cihaz_id = $request->id;
                $olcumNem->deger = $request->nem;
                $olcumNem->tarih = Carbon::createFromFormat('Y-m-d H:i:s', $request->tarih. ' '. $request->saat)->toDateTimeString();
                if($olcumNem->tarih < '2019-01-01') {
                    $olcumNem->tarih = Carbon::now();
                }
                $olcumNem->save();
            }

            if(!$request->ortam == 'nan') {
                $olcumOrtam = new Olcum();
                $sensorTip = SensorType::where('baslik', 'Ortam')->first();
                $olcumOrtam->type_id = $sensorTip->id;
                $olcumOrtam->cihaz_id = $request->id;
                $olcumOrtam->deger = $request->ortam;
                $olcumOrtam->tarih = Carbon::createFromFormat('Y-m-d H:i:s', $request->tarih. ' '. $request->saat)->toDateTimeString();
                if($olcumOrtam->tarih < '2019-01-01') {
                    $olcumOrtam->tarih = Carbon::now();
                }
                $olcumOrtam->save();
            }

            return response()->json(['status' => 'Successfull.']);
        }
    }
}
