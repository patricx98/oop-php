<?php
class Frog extends Animal {
  public function jump() {
    echo "hop hop";
  }
    public function __construct() {
		$this->legs=4;
        
    }
}
?>