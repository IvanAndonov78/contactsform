<?php 

require_once './model/address_model/AddressDao.php';
require_once './model/name_model/NameDao.php';

class AddressController {

    public function test() {
        $address_dao = new AddressDao();
        $address_dao->printAllAddresses();
    }

}

?>