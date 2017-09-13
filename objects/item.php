<?php
	class Item {
		// Should be of type string.
		private $name;

		// Should be of type float.
		private $price;

		/*
		 * The type of quantity this item has.
		 * pounds
		 */
		private $unit;

		// Should be of type integer.
		private $quantity;

		public function getName () {
			return $this->name;
		}
		public function getPrice () {
			return $this->price;
		}
		public function getUnit () {
			return $this->unit;
		}
		public function getQuantity () {
			return $this->quantity;
		}

		public function setName ($name) {
			$this->name = name;
		}
		public function setPrice ($price) {
			$this->price = price;
		}
		public function setUnit ($unit) {
			$this->unit = unit;
		}
		public function setQuantity ($quantity) {
			$this->quantity = quantity;
		}
	}
?>
