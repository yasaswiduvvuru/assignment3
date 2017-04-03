<?php
	// This is the file for the parent class
class Student
{
	protected $first;
	protected $last;
	protected $username;
	protected $peoplesoft;
	
	public function __construct($first, $last, $username, $peoplesoft)
	{
		$this->$first = $first;
		$this->$last = $last;
		$this->$username = $username;
		$this->$peoplesoft = $peoplesoft;
	}
	
	public function getFirstName()
	{
		return $this->$first;	
	}
	
	public function getLastName()
	{
		return $this->$last;
	}
	
	public function getUsername()
	{
		return $this->$username;	
	}
	
	public function getPeoplesoft()
	{
		return $this->$peoplesoft;	
	}

}

?>
