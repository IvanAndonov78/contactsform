<?php 

require_once './model/name_model/NameDao.php';
require_once './model/address_model/AddressDao.php';

class NameAndAddressFormController {

    public function save() {

        $data = json_decode(file_get_contents('php://input'), true);

        if (!empty($data['firstname']) && !empty($data['surname']) 
            && !empty($data['countryid']) && !empty($data['phone']) 
            && !empty($data['email']) && !empty($data['address'])) {

                $name_dao = new NameDao();
                $nameid = $name_dao->getLastNameId() + 1; // nameid for insert

                $firstname = $data['firstname'];
                $firstname = trim($firstname);
                $firstname = stripslashes($firstname);
                $firstname = htmlspecialchars($firstname);

                $surname = $data['surname'];
                $surname = trim($surname);
                $surname = stripslashes($surname);
                $surname = htmlspecialchars($surname);

                $countryid = $data['countryid'];
                $countryid = trim($countryid);
                $countryid = stripslashes($countryid);
                $countryid = htmlspecialchars($countryid);

                $phone = $data['phone'];
                $phone = trim($phone);
                $phone = stripslashes($phone);
                $phone = htmlspecialchars($phone);

                $email = $data['email'];
                $email = trim($email);
                $email = stripslashes($email);
                $email = htmlspecialchars($email);

                $address = $data['address'];
                $address = trim($address);
                $address = stripslashes($address);
                $address = htmlspecialchars($address);

                $errArr = array();

                $nameRegEx = "/^[a-zA-Z ]*$/";
                if (!preg_match($nameRegEx, $firstname)) {
                    $errArr[] = "Invalid First Name!";
                }

                if (!preg_match($nameRegEx, $surname)) {
                    $errArr[] = "Invalid Sur Name!";
                }

                if ($address == null || $address == "") {
                    $errArr[] = "You must enter an address!";
                }

                if (count($phone) > 12) {
                    $errArr[] = 'Your phone number must contain less than 12 digits!';
                }

                $phoneRegEx = "/^[0-9]*$/";
                if(!preg_match($phoneRegEx, $phone)) {
                    $el = "You must enter a phone number (number of digits) ";
                    $el .= "without spaces or slashes between the digits!";
                    $errArr[] = $el;
                }

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errArr[] = "Invalid Email!";
                }

                //----------------------------

                $name_dao->insertName($firstname, $surname); // INSERT NAME

                $inputArr = array($nameid, $countryid, $phone, $email, $address);

                $address_dao = new AddressDao();
                $address_dao->insertAddress($inputArr); // INSERT ADDRESS 
        }   
    }

}

?>