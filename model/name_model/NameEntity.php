<?php

class NameEntity {
    
    private $nameid;
    private $firstname;
    private $surname;

    public function __construct($nameid = null, $firstname = null, $surname = null) {
        $this->nameid = $nameid;
        $this->firstname = $firstname;
        $this->surname = $surname;
    }

    function getNameId() {
        return $this->nameid;
    }

    function setNameId($nameid) {
        $this->nameid = $nameid;
    }

    function getFirstName() {
        return $this->firstname;
    }

    function setFirstName ($firstname) {
        $this->firstname = $firstname;
    }

    function getSurName() {
        return $this->surname;
    }

    function setSurName($surname) {
        $this->surname = $surname;
    }

}

?>