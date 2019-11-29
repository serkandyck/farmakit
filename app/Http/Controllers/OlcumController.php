<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OlcumController extends Controller
{
    public function index(Request $request) {
    	Log::info('İstek: '.$request);
    	$agent = $request->header('user-agent');
    	Log::info('Agent: '.$agent);

    	if(!$agent == 'ESP8266HTTPClient') {
    		return response()->json(['status' => 'Unauthorized.']);
    	}

    	if(!$request->kod == 'Fk3306') {
    		return response()->json(['status' => 'Unauthorized.']);
    	}
    }
}
