<?php

class ContactController extends BaseController {

	public function index()
	{
		$data = ContactModel::all();
		$this->layout->content = View::make('templates.site.contact')->withData($data);
	}

}