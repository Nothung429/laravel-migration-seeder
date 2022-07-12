<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        $currentTime = Carbon::now()->format('Y-m-d');

        $trains = Train::where($currentTime == `departure_time`);

        return view('homepage', compact('trains'));
    }
}
