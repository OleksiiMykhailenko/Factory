<?php 

class Robot
{
	private $_name;

	private $_function;

	private $_wheel;

	private $_body;

	private $_head;

	private $_weapon;

	public function setName($name)
	{
		$this->_name = $name;
	}

	public function setFunction($function)
	{
		$this->_function = $function;
	}

	public function setWheel($wheel)
	{
		$this->_wheel = $wheel;
	}

	public function setBody($body)
	{
		$this->_body = $body;
	}

	public function setHead($head)
	{
		$this->_head = $head;
	}

	public function setWeapon($weapon)
	{
		$this->weapon = $weapon;
	}
}

abstract class BuilderRobot
{
	protected $_robot;

	public function getRobot()
	{
		return $this->_robot;
	}

	public function createRobot()
	{
		$this->_robot = new Robot();
	}

	abstract public function buildName();

	abstract public function buildFunction();

	abstract public function buildWheel();

	abstract public function buildBody();

	abstract public function buildHead();

	abstract public function buildWeapon();
}

class BuilderCivil extends BuilderRobot
{
	public function buildName()
	{
		$this->_robot->setName('1234');
	}

	public function buildFunction()
	{
		$this->_robot->setFunction(strtoupper('civ'));
	}

	public function buildWheel()
	{
		$this->_robot->setWheel('wheel1');
		$this->_robot->setWheel('wheel2');
	}

	public function buildBody()
	{
		$this->_robot->setBody('civilBody');
	}

	public function buildHead()
	{
		$this->_robot->setHead('civilHead');
	}

	public function buildWeapon()
	{
		$this->_robot->setWeapon('Civil Robot does not have weapon!');
	}
}

class BuilderMilitary extends BuilderRobot
{
	public function buildName()
	{
		$this->_robot->setName('4321');
	}

	public function buildFunction()
	{
		$this->_robot->setFunction(strtoupper('mil'));
	}

	public function buildWheel()
	{
		$this->_robot->setWheel('trackedChassis1');
		$this->_robot->setWheel('trackedChassis2');
	}

	public function buildBody()
	{
		$this->_robot->setBody('militaryBody');
	}

	public function buildHead()
	{
		$this->_robot->setHead('militaryHead');
	}

	public function buildWeapon()
	{
		$this->_robot->setWeapon('militaryWeapon');
	}
}

class Chooser
{
	private $_builderRobot;

	public function setBuilderRobot(BuilderRobot $rb)
	{
		$this->_builderRobot = $rb;
	}

	public function getRobot()
	{
		return $this->_builderRobot->getRobot();
	}

	public function constructRobot()
	{
		$this->_builderRobot->createRobot();
		$this->_builderRobot->buildName();
		$this->_builderRobot->buildFunction();
		$this->_builderRobot->buildWheel();
		$this->_builderRobot->buildBody();
		$this->_builderRobot->buildHead();
		$this->_builderRobot->buildWeapon();
	}
}

$user = new Chooser();
$robot1 = new BuilderCivil();
$robot2 = new BuilderMilitary();
$user->setBuilderRobot($robot1);
$user->constructRobot();
print_r($realRobot = $user->getRobot());

echo "<br>";

$user->setBuilderRobot($robot2);
$user->constructRobot();
print_r($realRobot = $user->getRobot());

 ?>