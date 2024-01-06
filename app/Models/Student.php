<?php

use CodeIgniter\Model;

class Student extends Model {
    private $id;
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $location;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    // Getters

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function getLocation() {
        return $this->location;
    }
}

?>