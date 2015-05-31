<?php

class SetDesignController extends BaseController {

	public function index()
	{
		$data = SetDesign::orderBy('id', 'DESC')->get();

		$this->layout->content = View::make('templates.site.listing')->withData($data);
	}

	public function details( $id )
	{
		$photos = SetDesign::where( 'slug', '=', $id )->firstOrFail()->photos;

		$name = SetDesign::where( 'slug', '=', $id )->firstOrFail()->name;

		$client = SetDesign::where( 'slug', '=', $id )->firstOrFail()->client;
		$client_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->client_url;

		$director = SetDesign::where( 'slug', '=', $id )->firstOrFail()->director;
		$director_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->director_url;

		$photographer = SetDesign::where( 'slug', '=', $id )->firstOrFail()->photographer;
		$photographer_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->photographer_url;

		$talent = SetDesign::where( 'slug', '=', $id )->firstOrFail()->talent;
		$talent_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->talent_url;
		$talent_agency = SetDesign::where( 'slug', '=', $id )->firstOrFail()->talent_agency;

		$stylist = SetDesign::where( 'slug', '=', $id )->firstOrFail()->stylist;
		$stylist_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->stylist_url;

		$hair = SetDesign::where( 'slug', '=', $id )->firstOrFail()->hair;
		$hair_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->hair_url;

		$makeup = SetDesign::where( 'slug', '=', $id )->firstOrFail()->makeup;
		$makeup_url = SetDesign::where( 'slug', '=', $id )->firstOrFail()->makeup_url;

		$this->layout->content = View::make('templates.site.details')->with('photos', $photos )->with('name', $name )->with('client', $client )->with('client_url', $client_url )->with('director', $director )->with('director_url', $director_url )->with('photographer', $photographer )->with('photographer_url', $photographer_url )->with('talent', $talent )->with('talent_url', $talent_url )->with('talent_agency', $talent_agency )->with('stylist', $stylist )->with('stylist_url', $stylist_url )->with('hair', $hair )->with('hair_url', $hair_url )->with('makeup', $makeup )->with('makeup_url', $makeup_url );
	}

}

