<?php

namespace App\Controllees\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function getIndex()
    {
        return view('admin.dashboard');
    }
}
