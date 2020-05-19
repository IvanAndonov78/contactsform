<?php

class AddressEntity {
    
    private $addressid;
    private $nameid;
    private $countryid;
    private $phone;
    private $email;
    private $address;

    public function __construct(
            $addressid = null, 
            $nameid = null, 
            $countryid = null,
            $phone = null,
            $email = null,
            $address = null
        ) {
        
        $this->addressid = $addressid;
        $this->nameid = $nameid;
        $this->countryid = $countryid;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }

    function getAddressId() {
        return $this->addressid;
    }

    function setAddressId($addressid) {
        $this->addressid = $addressid;
    }

    function getNameId() {
        return $this->nameid;
    }

    function setNameId($nameid) {
        $this->nameid = $nameid;
    }

    function getCountryId() {
        return $this->countryid;
    }

    function setCountryId($countryid) {
        $this->countryid = $countryid;
    }

    function getPhone() {
        return $this->phone;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getAddress() {
        return $this->address;
    }

    function setAddress($address) {
        $this->address = $address;
    }

}

?>