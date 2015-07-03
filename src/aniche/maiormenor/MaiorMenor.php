<?php

namespace Aniche\TDD\MaiorMenor;

require "./vendor/autoload.php";

class MaiorMenor {
	private $menor = 1000;
	private $maior = -1000;

	public function encontra($nums) {
		foreach($nums as $n) {
			if($n > $this->maior) $this->maior = $n;
			if($n < $this->menor) $this->menor = $n;
		}
	}

	public function getMenor() {
		return $this->menor;
	}

	public function getMaior() {
		return $this->maior;
	}
}

/*
$mm = new MaiorMenor();
$mm->encontra(array(4, 5, 6, 7));

echo $mm->getMaior();
echo " ";
echo $mm->getMenor();
*/

?>