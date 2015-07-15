<?php

namespace App\Http\Controllers\Littera;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function getIndex()
    {
        return view('littera.dashboard');
    }
}
