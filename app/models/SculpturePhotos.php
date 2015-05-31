<?php

class SculpturePhotos extends Model {

	protected $table = 'sculpture_photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','sculpture_id','photocover_id');
	}

	public function model()
	{
		return $this->belongsTo('Sculpture','sculpture_id');
	}

	public function path()
	{
		return $this->path;
	}

}
