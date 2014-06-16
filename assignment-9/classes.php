<?php

class Bus {
	public $armed = false;
	public $explode = false;
	public $speed = 0;


	function set_speed($mph) {
		$this->speed = $mph;
		
		
		if($mph >= 50 && $this->armed == false) {
			$this->armed = true;	
			
		}


		if($this->armed == true && $mph < 50) {
			$this->explode = true; 
			

		}	
	
	}

	function get_speed() {
		return $this->speed;
	}

	function trigger() {
		return $this->explode = true;
	}
}