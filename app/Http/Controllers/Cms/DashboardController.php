<?php namespace App\Controllees\Cms;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{

    public function getIndex()
    {
        return view('cms.dashboard.index');
    }

}
