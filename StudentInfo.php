<?php 

class StudentInfo extends Student
{
	protected $GPA;
	protected $credits;
	protected $major;
	
	public function __construct($first, $last, $username, $peoplesoft, $GPA, $credits, $major)
	{
		parent::__construct($first, $last, $username, $peoplesoft);
		$this->$GPA = $GPA;
		$this->$credits = $credits;
		$this->$major = $major;
	}
	public function __toString()
	{
		echo 'First Name: ' . $this->$first;
		echo 'Last Name: '. $this->$last;
		echo 'Username: '. $this->$username;
		echo 'Peoplesoft ID: ' . $this->$peoplesoft;
		echo 'GPA: ' . $this->$GPA;
		echo '$credits: ' . $this->$credits;
		echo '$major: ' . $this->$major;
	}
	
	public function getGPA()
	{
		return $this->$GPA;
	}
	
	public function getCredits()
	{
		return $this->$Credits;	
	}
	
	public function getMajor()
	{
		return $this->$major;
	}
}

?>
