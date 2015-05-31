<?php

class AboutController extends BaseController {

	public function index()
	{
		$data = AboutModel::all();
		$this->layout->content = View::make('templates.site.about')->withData($data);
	}

}