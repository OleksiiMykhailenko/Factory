<?php 

 interface Robot
 {
 	public function getNewRobot();

 	public function reset();
 }

 class CivilRobot implements Robot
 {
 	public function getNewRobot()
 	{
 		$num = '12345678910';
 		$number = '';
 		for ($i=0; $i < 4; $i++) { 
 			$randnumber = rand(0, 10);
 			$number .= $num[$randnumber];
 		}
 		return "My Name:" . $number;
 	}

 	public function reset()
 	{
 		return $number = "Robot name reset to factory settings";
 	}
 }

  class MilitaryRobot implements Robot
  {
 	public function getNewRobot()
 	{
 		$num = '12345678910';
 		$number = '';
 		for ($i=0; $i < 4; $i++) { 
 			$randnumber = rand(0, 10);
 			$number .= $num[$randnumber];
 		}
 		return "My Name:" . $number;
 	}

 	public function reset()
 	{
 		return $number = "Robot name reset to factory settings";
 	}
 }


 interface RobotFunctionExpert
 {
 	public function getNewFunction();
 }

 class CivilRobotFunction implements RobotFunctionExpert
 {
 	public function getNewFunction()
 	{
 		return strtoupper('civ');
 	}
 }

 class MilitaryRobotFunction implements RobotFunctionExpert
 {
 	public function getNewFunction()
 	{
 		return strtoupper('mil');;
 	}
 }


interface RobotFactory
{
	public function makeRobot(): Robot;

	public function makeFunctionExpert(): RobotFunctionExpert;
}

class CivilRobotFactory implements RobotFactory
{
	public function makeRobot(): Robot
	{
		return new CivilRobot();
	}

	public function makeFunctionExpert(): RobotFunctionExpert
	{
		return new CivilRobotFunction();
	}
}

class MilitaryRobotFactory implements RobotFactory
{
	public function makeRobot(): Robot
	{
		return new MilitaryRobot();
	}

	public function makeFunctionExpert(): RobotFunctionExpert
	{
		return new MilitaryRobotFunction();
	}
}

$civilFactory = new CivilRobotFactory();
$robot1 = $civilFactory->makeRobot();
$expert1 = $civilFactory->makeFunctionExpert();

echo $robot1->getNewRobot();
echo $expert1->getNewFunction();

echo "<br>";

$militaryFactory = new MilitaryRobotFactory();
$robot2 = $militaryFactory->makeRobot();
$expert2 = $militaryFactory->makeFunctionExpert();

echo $robot2->getNewRobot();
echo $expert2->getNewFunction();

echo "<br>";

echo $robot1->reset();
echo "<br>";
echo $robot2->reset();

 ?>