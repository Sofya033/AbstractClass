<?php

require_once "./AbstractProductionClass.php";

class ContentClass extends AbstractProductionClass {
	public function doPrint()
	{
		echo "Content";
	}
}
