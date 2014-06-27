<?php

class AdminController extends BaseController
{
	public function getIndex()
	{
		return View::make('admin.index');
	}
}