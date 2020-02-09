<?php
function randomSelect($parts = NULL) {
	$errored = 0;
	if(!isset($parts)) {
		echo "Error: Please define parts";
		$errored = 1;
	}
	if($errored == 0) {
		$partsCount = explode(", ", $parts);
		if(count($partsCount) > 100) {
			echo "Error: Can not work with more that 100 parts";
			$errored = 1;
		}elseif(count($partsCount) < 2) {
			echo "Error: Can not work with only single part";
			$errored = 1;
		}
	}
	if($errored == 0) {
		$counter = 0;
		foreach($partsCount as $item) {
			$item_ = 0;
			$item_ = explode(":", $item);
			if(count($item_) == 0) {
				echo "Error: Defined part does not include required data";
				$errored = 1;
			}
			if($errored == 0) {
				if(count($item_) > 2) {
					echo "Error: Unexcepted third value of " . $item_[0];
					$errored = 1;
				}
			}
			if($errored == 0) {
				if($item_[1] > 99) {
					echo "Error: Can not work with part value above 100";
					$errored = 1;
				}
			}
			if($errored == 0) {
				$counter = $counter + $item_[1];
			}
			if($errored == 0) {
				foreach(range(1, $item_[1]) as $item__) {
					$parts_[] = $item_[0];
				}
			}
		}
		if($counter != 100) {
			echo "Error: Total value of parts is not 100";
			$errored = 1;
		}
	}
	$k = array_rand($parts_);
	return $parts_[$k];
}
