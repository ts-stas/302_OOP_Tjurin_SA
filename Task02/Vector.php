<?php
	class Vector{
		public $x;
		public $y;
		public $z;
		
		public function __construct($x, $y, $z) {
			if (is_numeric($x) && is_numeric($y) && is_numeric($z)){
				$this->x = $x;
				$this->y = $y;
				$this->z = $z;
			}
			else echo "Проверьте данные..";
		}
		
		public function add($v){
			$obj=new Vector($this->x+$v->x,
							$this->y+$v->y,
							$this->z+$v->z);
			return $obj;
		}
		public function sub($v){
			$obj=new Vector($this->x-$v->x,
							$this->y-$v->y,
							$this->z-$v->z);
			return $obj;
		}		
		public function product($n){
			$obj=new Vector($this->x*$n,
							$this->y*$n,
							$this->z*$n);
			return $obj;
		}
		public function scalarProduct($v){
			$vectorProduct= $this->x*$v->x+
							$this->y*$v->y+
							$this->z*$v->z;
			return $vectorProduct;
		}					
		public function vectorProduct($v){
			$obj=new Vector ($this -> y * $v -> z - $v -> y * $this -> z,
							-$this -> x * $v -> z + $v -> x * $this -> z,
							 $this -> x * $v -> y - $v -> x * $this -> y);
			return $obj;
		}	
		public function toString(){
			return "($this->x, $this->y, $this->z)";
		}
	}
?>