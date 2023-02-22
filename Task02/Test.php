<?php
	include '2.php';
	function runTest(){
		// String representation test
		$v1 = new Vector(1, 2, 3);
		echo "Вектор 1"."<br>";
		echo "Ожидается: (1; 2; 3)"."<br>";
		echo "Получено: " . $v1->toString()."<br>"."<br>";;
		
		$v2 = new Vector(1, 4, -2);
		echo "Вектор 2"."<br>";
		echo "Ожидается: (1, 4, -2)"."<br>";
		echo "Получено: " . $v2->toString()."<br>"."<br>";;
		
		// Adding test
		$v3 = $v1->add($v2);
		echo "Сложение векторов"."<br>";
        echo "Ожидается: (2, 6, 1)"."<br>";		
		echo "Получено: " . $v3->toString()."<br>"."<br>";;
		
		$v4=$v1->sub($v2);
		echo "Вычитание векторов"."<br>";
		echo "Ожидается: (0, -2, 5)"."<br>";
		echo "Получено: " . $v4->toString()."<br>"."<br>";;
		
		$v5=$v1->product(8);
		echo "Умножение на число"."<br>";
		echo "Ожидается: (8, 16, 24)"."<br>";
		echo "Получено: " . $v5->toString()."<br>"."<br>";;
		
		$v6=$v1->scalarProduct($v2);
		echo "Скалярное произведение"."<br>";
		echo "Ожидается: 3"."<br>";
		echo "Получено: " . $v6 ."<br>"."<br>";;
		
		$v7=$v1->vectorProduct($v2);
		echo "Векторное произведение"."<br>";
		echo "Ожидается: (-16, 5, 2)"."<br>";
		echo "Получено: " . $v7->toString()."<br>";
	}
?>