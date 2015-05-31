<?php

class SetDesignPhotos extends Model {

	protected $table = 'setdesign_photos';

	public function cover()
	{
		return $this->belongsTo('ModelsModel','setdesign_id','photocover_id');
	}

	public function model()
	{
		return $this->belongsTo('SetDesign','setdesign_id');
	}

	public function path()
	{
		return $this->path;
	}

}
