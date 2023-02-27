<?php
class Person
{
	public $name;
	public $email;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}
}

$person = new Person();

$n = "Emon";
$e = "imamhosen@gmail.com";
$person->setName($n);
$person->setEmail($e);


echo "<b>Name: " . $person->getName() . "<b/><br>";
echo "Email: " . $person->getEmail() . "<br>";
