<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{

    public function getIndex()
    {
        return view('pages.index');
    }

}
