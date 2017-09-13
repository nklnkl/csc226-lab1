<?php
	class Order {
		// Should be of type array.
		private $items;

		private $date;

    private $shippingFee = 10;

    // 0: new customer, 1: returning customer;
    private $customer;

		public function getItems () {
			return $this->items;
		}

		public function getDate () {
			return $this->date;
		}

    public function getCustomer () {
      return $this->customer;
    }

		public function setItems ($items) {
			$this->items = items;
		}

		public function setDate ($date) {
			if ($date != null)
				$this->date = $date
			else
				$this->date = date('H:i, jS F Y');
		}

    public function setCustomer ($customer) {
      $this->customer = $customer;
    }

    public function removeItem ($index) {
      array_splice($this->items, $index, 1);
    }

    public function addItem ($item) {
      array_push($this->items, $item);
    }

    public function clearItems () {
      unset($this-items);
    }

    public function getSubtotal () {
      $total = 0;

      // Loop through each item and add to the sum.
      foreach ($this-items as $item) {
        $total += $item->getPrice();
      }

      // Add discount based on customer type.
      switch ($this->customer->getType()) {
        case 0: // New customer.
          $total -= $total * 0.07;
          break;
        case 1: // Returning customer.
          $total -= $total * 0.05;
          break;
        default:
      }

      // If less than $50, add shipping fee.
      if ($total < 50)
        $total += $this->shippingFee;

      return $total;
    }

    public function getTax () {
      return $this->getSubtotal() * 0.0875;
    }

    public function getTotal () {
      return $this->getSubtotal() + $this->getTax();
    }
	}
?>
