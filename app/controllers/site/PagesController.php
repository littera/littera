<?php

namespace Site;

class PagesController extends SiteController
{
	public function getIndex()
	{
		return \View::make('pages.index');
	}
}