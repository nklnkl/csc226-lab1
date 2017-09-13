<?php
  class Customer {
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $type; // 0: new customer, 1: returning customer.
    private $address;
    private $city;
    private $state;
    private $zipcode;

    public function getEmail () {
      return $this->email;
    }
    public function getPassword () {
      return $this->password;
    }
    public function getFirstName () {
      return $this->firstName;
    }
    public function getLastName () {
      return $this->lastName;
    }
    public function getType () {
      return $this->type;
    }
    public function getAddress () {
      return $this->address;
    }
    public function getCity () {
      return $this->city;
    }
    public function getState () {
      return $this->state;
    }
    public function getZipcode () {
      return $this->zipcode;
    }

    public function setEmail ($email) {
      $this->email = $email;
    }
    public function setPassword ($password) {
      $this->password = $password;
    }
    public function setFirstName ($firstName) {
      $this->firstName = $firstName;
    }
    public function setLastName ($lastName) {
      $this->lastName = $lastName;
    }
    public function setType ($type) {
      $this->type = $type;
    }
    public function setAddress ($address) {
      $this->address = $address;
    }
    public function setCity ($city) {
      $this->city = $city;
    }
    public function setState ($state) {
      $this->state = $state;
    }
    public function setZipcode ($zipcode) {
      $this->zipcode = $zipcode;
    }

    public function getTypeString () {
      switch ($this->type) {
        case 0: return "new customer";
        case 1: return "returning customer";
        default: return "error";
      }
    }

    public function getFullName () {
      return $this->lastName . ", " . $this->firstName;
    }

    public function getFullAddress () {
      return $this->address . ", " . $this->city . " " $this->state . " " . $this->zipcode;
    }
  }
?>
