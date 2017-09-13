<?php
	class Item {
		// Should be of type string.
		private $name;

		// Should be of type float.
		private $price;

		// 0: toy, 1: dry food, 2: wet food
		private $category;

		/*
		 * The type of quantity this item has.
		 * 0: unit, no label
		 * 1: pound
		 * 2: can
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
		public function getCategory () {
			return $this->category;
		}
		public function getUnit () {
			return $this->unit;
		}
		public function getQuantity () {
			return $this->quantity;
		}

		public function setName ($name) {
			$this->name = $name;
		}
		public function setPrice ($price) {
			$this->price = $price;
		}
		public function setCategory ($category) {
			$this->category = $category;
		}
		public function setUnit ($unit) {
			$this->unit = $unit;
		}
		public function setQuantity ($quantity) {
			$this->quantity = $quantity;
		}

		public function getCategoryString () {
			switch ($this->category) {
				case 0: return "toy";
				case 1: return "dry food";
				case 2: return "wet food";
				default: return;
			}
		}

		public function getUnitString () {
			switch ($this->category) {
				case 0: return "unit";
				case 1: return "pound";
				case 2: return "can";
				default: return;
			}
		}
	}
?>
