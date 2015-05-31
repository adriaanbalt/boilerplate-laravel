<?php

class NavigationModel extends Model {

	private $nav = null;

	private $navArr = array();
	private $selected = 'home';
	private $selectedSub = '';

	private $_navigation_data=null;

	protected $table = 'navigation';

	public function getNavigation()
	{
		if ( count($this->navArr) <= 0){
			$this->buildNavigation( NavigationModel::all() );
		}


		return $this->navArr;
	}

	/**
	 * Build the navigation object for use by the templates
	 *
	 * @param Object $data The data returned by the CMS.
	 * @return Object
	 */
	private function buildNavigation( $data )
	{
		$nav = $this;

		// Determine current location
		$uri_segments = Request::segments();
		$cur_section = 'home';
		$cur_subsection = '';
		$num_segments = count($uri_segments);
		if (isset($uri_segments[0])) {
			$cur_section = $uri_segments[0];
		}
		if ($num_segments > 1) {
			$cur_subsection = $uri_segments[$num_segments - 1];
		}

		foreach ($data as $n) {


			$nav_item = new NavItemModel;
			$nav_item->setID( $n->attributes['id'] );
			$nav_item->setTitle( $n->attributes['title'] );
			$nav_item->setSlug( $n->attributes['slug'] );

			if ($cur_section == $n->url) {
				// $nav->setSubnav($nav_item->getSubnav());
				$nav->setSelectedItem($n->url);
			}

			$nav->addNavItem($nav_item);
		}

		return $nav;
	}


	public function getNav()
	{
		return $this->navArr;
	}

	public function addNavItem( $item )
	{
		$this->navArr[] = $item;
		return $this;
	}

	public function getSelectedItem()
	{
		return $this->$selected;
	}
	public function setSelectedItem( $str )
	{
		$this->selected = $str;
		return $this;
	}

}


/*
	id				primary key		unique identifier ie: 283208234
	label
	url
*/