<?php 

$qs = $_SERVER['QUERY_STRING'];

function frontController($qs) {
    switch ($qs) {
        case '/':
            require_once __DIR__ . '/views/index.php';
            break;
        case '':
            require_once __DIR__ . '/views/index.php';
            break;
        case 'login':
            // http://localhost/task_creative_web/index.php?login
            require_once __DIR__ . '/controllers/user_controller.php';
            $uc = new UserController();
            $uc->handleInput();
            break;
        case 'countries':
            // http://localhost/task_creative_web/index.php?countries
            require_once __DIR__ . '/controllers/country_controller.php';
            $cc = new CountryController();
            $cc->countriesProvider();
            break;
        case 'save':
            // http://localhost/task_creative_web/index.php?save
            require_once __DIR__ . '/controllers/insert_form_controller.php';
            $nafc = new NameAndAddressFormController();
            $nafc->save(); 
            break;
        case 'admin_report':
            require_once __DIR__ . '/controllers/user_controller.php';
            $uc = new UserController();
            $uc->adminReportProvider();
            break;
        case 'test':
            // http://localhost/task_creative_web/index.php?test
            /*
            require_once __DIR__ . '/model/user_model/UserDao.php';
            $ud = new UserDao();
            $ud->getAdminRepData();
            */
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
}

frontController($qs);

?>