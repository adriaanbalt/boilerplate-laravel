<?php

class ContactModel extends Model {

	protected $table = 'contact';

	public function name()
	{
		return $this->name;
	}

	public function position()
	{
		return $this->position;
	}

	public function telephone()
	{
		return $this->telephone;
	}

	public function fax()
	{
		return $this->fax;
	}

	public function email()
	{
		return $this->email;
	}

	public function address()
	{
		return $this->address;
	}

	public function website()
	{
		return $this->website;
	}

}


/*

$table->string('name');
$table->string('position');
$table->string('telephone');
$table->string('fax');
$table->string('email');
$table->string('address');
$table->string('website');
*/