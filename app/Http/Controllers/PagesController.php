<?php namespace App\Http\Controllers;

use App\Models\Page;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
            throw new NotFoundHttpException;
        }

        if (null === $slug)
        {
            return view('pages.index', [
                'page' => $page
            ]);
        }
        else
        {
            return view('pages.internal', [
                'page' => $page
            ]);
        }
    }

}
