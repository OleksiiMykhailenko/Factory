<?php 

/**
Создайте класс который будет высчитывать “космический” возраст на:
● Земля: орбитальный период 365.25 земных дней, или 31557600 секунд
● Меркурий: орбитальный период 0.2408467 земных лет
● Венера: орбитальный период 0.61519726 земных лет
● Марс: орбитальный период 1.8808158 земных лет
● Юпитер: орбитальный период 11.862615 земных лет
● Сатурн: орбитальный период 29.447498 земных лет
● Уран: орбитальный период 84.016846 земных лет
● Нептуне: орбитальный период 164.79132 земных лет
Например, вы прожили 1,000,000,000 секунд, то на Земле ваш возраст бы
составил: 31.69 лет.
Аргумент метода может принимать как время в секундах, так и годах
*/

class CosmicAge
{

	const EARTH_DAYS = 365.25;
	const EARTH_PERIOD = 1;
	const MERCURY_PERIOD = 0.2408467;
	const VENUS_PERIOD = 0.61519726;
	const MARS_PERIOD = 1.8808158;
	const JUPITER_PERIOD = 11.862615;
	const SATURN_PERIOD = 29.447498;
	const URANUS_PERIOD = 84.016846;
	const NEPTUNE_PERIOD = 164.79132;

	public function calculateCosmicAge($seconds, $planet)
	{
		switch ($planet) {
			case 'EARTH': 
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::EARTH_PERIOD);
				break;
			case 'MERCURY': 
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::MERCURY_PERIOD);
				break;
			case 'VENUS': 
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::VENUS_PERIOD);
				break;
			case 'MARS': 
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::MARS_PERIOD);
				break;
			case 'JUPITER': 
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::JUPITER_PERIOD);
				break;
			case 'SATURN':
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::SATURN_PERIOD);
				break;
			case 'URANUS':
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::URANUS_PERIOD);
				break;
			case 'NEPTUNE':
			$years = $seconds/60/60/24/(self::EARTH_DAYS * self::NEPTUNE_PERIOD);
				break;
		}
		return $years;
	}
}

echo CosmicAge::calculateCosmicAge(31557600, 'MERCURY'); //4.1520186907273

?>
