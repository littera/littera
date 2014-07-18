<?php

namespace Cms;

class DashboardController extends CmsController
{
	public function getIndex()
	{
		return \View::make('cms.dashboard.index');
	}
}