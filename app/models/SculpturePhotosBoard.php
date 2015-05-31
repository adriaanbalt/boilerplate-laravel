<?php

class SculpturePhotosBoard extends Model {

	protected $table = 'sculpture_photos_board';

	public function story()
	{
		return $this->hasOne('Sculpture', 'id', 'sculpture_id');
	}

	public function cover()
	{
		return $this->hasOne('SculpturePhotos', 'id', 'photo_id');
	}

}
