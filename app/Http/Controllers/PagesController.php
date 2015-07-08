<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PagesController extends Controller
{
    /**
     * @var Page
     */
    private $page;

    /**
     * @param  Page $page
     * @return void
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function getPage($slug = null)
    {
        if (null === $slug)
        {
            $page = $this->page->where('slug', '/')->where('draft', 0)->first();
        }
        else
        {
            $page = $this->page->where('slug', $slug)->where('draft', 0)->first();
        }

        if (null === $page)
        {
            abort(404);
        }

        if (null === $slug)
        {
            return view('templates.home', [
                'page' => $page
            ]);
        }
        else
        {
            return view('templates.default', [
                'page' => $page
            ]);
        }
    }

    public function getWelcome()
    {
        return view('pages.welcome', [
            'title' => 'Welcome to Littera'
        ]);
    }

}
