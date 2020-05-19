<?php 

require_once './model/name_model/NameDao.php';

class NameController {

    public function test() {
        $name_dao = new NameDao();
        $name_dao->printAllNames();
    }

}

?>