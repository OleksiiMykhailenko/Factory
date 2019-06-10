<?php 
/**
Создайте класс и реализуйте в нем статический метод accumulate(array
$numbers). Метод должен к каждому элементу массива применить функцию:
x = x * x
Пример: дано массив [1, 2, 3, 4, 5]
Результат должен быть в виде массива: [1, 4, 9, 16, 25]
*/

class GetDouble 
{

	public $numbers = [1, 2, 3, 4, 5];

	public function accumulate()
	{
		$newNumbers = array_map(function($x) {
			return $x = $x * $x;
		}, $this->numbers);

		return $newNumbers;
	}
}

$getdouble = new GetDouble();
print_r($getdouble->accumulate());  //Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

echo "<br>";
//второй вариант:

class GetDoubleS 
{

	public $numbers = [];

	public function __construct(array $numbers) 
	{
		$this->numbers = $numbers;
	}

	public function accumulate()
	{
		$newNumbers = array_map(function($x) {
			return $x = $x * $x;
		}, $this->numbers);

		return $newNumbers;
	}
}

$getdoubles = new GetDoubleS([1, 2, 3, 4, 5]);
print_r($getdoubles->accumulate());  //Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

?>