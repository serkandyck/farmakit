<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OlcumController extends Controller
{
    public function index(Request $request) {
    	Log::info('İstek: '.$request);
    }
}
