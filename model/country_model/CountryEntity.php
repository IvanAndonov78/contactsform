<?php

class CountryEntity {
    private $countryid;
    private $countrycode;
    private $country;

    public function __construct($countryid = null, $countrycode = null, $country = null) {
        $this->countryid = $country;
        $this->countrycode = $countrycode;
        $this->country = $country;
    }

    function getCountryId() {
        return $this->countryid;
    }

    function setCountryId($countryid) {
        $this->countryid = $countryid;
    }

    function getCountryCode() {
        return $this->countrycode;
    }

    function setCountryCode($countrycode) {
        $this->countrycode = $countrycode;
    }

    function getCountry() {
        return $this->country;
    }

    function setCountry($country) {
        $this->country = $country;
    }
}

?>