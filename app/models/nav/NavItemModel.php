<?php

class NavItemModel extends Model {

	protected $subnav = array();

	protected $color_id;

	protected $slug;

	public function NavItemModel () {
		// here i could get the subnav base don the $id
	}

	public function setSlug($slug)
	{
		$this->slug = $slug;
		return $this;
	}
	public function getSlug()
	{
		return $slug;
	}

	public function setColor( $color_id )
	{
		$this->color_id = $color_id;
		return $this;
	}
	public function getColor()
	{
		return $this->color_id;
	}
}

/*
	id				primary key		unique identifier ie: 283208234
	label
	slug
*/