<?php 

/**
Создайте класс и реализуйте метод который будет делать плоский массив из
ассоциативного
Пример: [1,[2,3,null,4],[null],5]
Результат: [1,2,3,4,5]
*/

class FlatArray
{
	public $array = [];

	static function getFlatArray($array)
	{
		foreach ($array as $value) {
			if (is_array($value)) {
				$result = array_merge($result, self::getFlatArray($value));
			} else {
				$result[] = $value;
				$result = array_filter($result);
			}
		}
		return $result;
	}
}

print_r(FlatArray::getFlatArray([1,[2,3,null,4],[null],5])); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


 ?>