<?php 

/**
Необходимо написать класс для подсчета и группировки слов в предложении.
Например: “Лето, наступило у нас лето”
Результат должен быть в виде массива:
[‘лето’] => 2,
[‘наступило’] => 1,
[‘у’] => 1,
[‘нас’] => 1
*/

class CountWords 
{
	public $string = '';

	const SEPARATORS = [",", ".", ";"];

	public function __construct(string $string)
	{
		$this->string = $string;
	}

	public function calcWords()
	{
		$string = mb_strtolower($this->string);
		$words = explode(" ", $string);
		$words = str_replace(self::SEPARATORS, "", $words);
		return array_count_values($words);
	}

}

$calcwords = new CountWords("Лето, наступило у нас лето");
print_r($calcwords->calcWords()); //Array ( [лето] => 2 [наступило] => 1 [у] => 1 [нас] => 1 )

?>