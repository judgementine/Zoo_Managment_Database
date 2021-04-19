<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'login.php';
        break;
    case '/login.php':
        require 'animal_shop/login.php';
        break;
        
    case '/ServerConnection.php':
        require 'animal_shop/ServerConnection.php';
        break;
        
    case '/animal_shop/login.php':
        require 'animal_shop/login.php';
        break;
    case '/test.php':
        require 'animal_shop/test.php';
        break;
    case '/backstage/Get_Financial_Report.php':
        require 'backstage/Get_Financial_Report.php';
        break;
    case '/Get_Financial_Report.php':
        require 'backstage/Get_Financial_Report.php';
        break;
    case '/backstage/Get_Shop_Report.php':
        require 'backstage/Get_Shop_Report.php';
        break;
    case '/Get_Shop_Report.php':
        require 'backstage/Get_Shop_Report.php';
        break;
    case '/backstage/Get_Animal_Report.php':
        require 'backstage/Get_Animal_Report.php';
        break;
    case '/Get_Animal_Report.php':
        require 'backstage/Get_Animal_Report.php';
        break;
    case '/backstage/index.php':
        require 'backstage/login.php';
        break;
    case '/backstage/index.php':
        require 'backstage/login.php';
        break;
    case '/backstage/ServerConnection.php':
        require 'backstage/ServerConnection.php';
        break;
    case '/backstage/conn.php':
        require 'backstage/conn.php';
        break;
    case '/conn.php':
        require 'backstage/conn.php';
        break;
    case '/backstage/conn.php':
        require 'backstage/conn.php';
        break;
    case '/backstage/components/animal/animalAddDo.php':
        require 'backstage/components/animal/animalAddDo.php';
        break;
    case '/backstage/components/finance/financeAddDo.php':
        require 'backstage/components/finance/financeAddDo.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}

?>