<?php

require_once "./NewsClass.php";
require_once "./AdvertClass.php";
require_once "./ContentClass.php";

$production[] = new NewsClass();
$production[] = new AdvertClass();
$production[] = new ContentClass();

foreach ($production as $item) {
	if ($item instanceof AbstractProductionClass) {
		$item->doPrint();
	}else {
		echo "К Production не относится";
	}
}
