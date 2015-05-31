<?php

class SetDesignModel extends Model {

	public function slug()
	{
		return $this->slug;
	}

	public function name()
	{
		return $this->name;
	}

	public function client()
	{
		return $this->client;
	}

	public function client_url()
	{
		return $this->client_url;
	}

	public function director()
	{
		return $this->director;
	}

	public function director_url()
	{
		return $this->director_url;
	}

	public function photographer()
	{
		return $this->photographer;
	}

	public function photographer_url()
	{
		return $this->photographer_url;
	}

	public function stylist()
	{
		return $this->stylist;
	}

	public function stylist_url()
	{
		return $this->stylist_url;
	}

	public function hair()
	{
		return $this->hair;
	}

	public function hair_url()
	{
		return $this->hair_url;
	}

	public function makeup()
	{
		return $this->makeup;
	}

	public function makeup_url()
	{
		return $this->makeup_url;
	}

	public function talent()
	{
		return $this->talent;
	}

	public function talent_url()
	{
		return $this->talent_url;
	}

	public function talent_agency()
	{
		return $this->talent_agency;
	}

	public function cover_photo()
	{
		return $this->cover_photo;
	}

}


/*
    $table->string('slug');

    $table->string('name');
    $table->string('height');
    $table->string('bust');
    $table->string('waist');
    $table->string('hips');
    $table->string('shoes');
    $table->string('hair');
    $table->string('eyes');
*/