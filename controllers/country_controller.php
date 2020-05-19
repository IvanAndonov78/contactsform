<?php 

require_once './model/country_model/CountryDao.php';

class CountryController {

    //https://countrycode.org/

    public function countriesProvider() {
        $country_dao = new CountryDao();
        $countries = $country_dao->getAllCountries();
        echo json_encode($countries);
    }

    public function test() {
        $country_dao = new CountryDao();
        $country_dao->printAllCountries();
    }

}

?>