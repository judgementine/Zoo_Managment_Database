<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'login.html';
        break;
    case '/login.php':
        require 'animal_shop/login.php';
        break;
    case '/login.html':
        require 'animal_shop/login.html';
        break;
    case '/AccountantMainPage.html':
        require 'animal_shop/AccountantMainPage.html';
        break;
    case '/AdminMainPage.html':
        require 'animal_shop/AdminMainPage.html';
        break;
    case '/ZookeeperMainPage.html':
        require 'animal_shop/AdminMainPage.html';
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
    case '/backstage/FinancialReport.html':
        require 'animal_shop/backstage/FinancialReport.html';
        break;
    case '/Get_Financial_Report.php':
        require 'animal_shop/backstage/Get_Financial_Report.php';
        break;
    case '/backstage/Get_Financial_Report.php':
        require 'animal_shop/backstage/Get_Financial_Report.php';
        break;
    case '/backstage/ShopReport.html':
        require 'animal_shop/backstage/ShopReport.html';
        break;
    case '/Get_Shop_Report.php':
        require 'animal_shop/backstage/Get_Shop_Report.php';
        break;
    case '/backstage/Get_Shop_Report.php':
        require 'animal_shop/backstage/Get_Shop_Report.php';
        break;
    case '/backstage/AnimalReport.html':
        require 'animal_shop/backstage/AnimalReport.html';
        break;
    case '/Get_Animal_Report.php':
        require 'animal_shop/backstage/Get_Animal_Report.php';
        break;
    case '/backstage/Get_Animal_Report.php':
        require 'animal_shop/backstage/Get_Animal_Report.php';
        break;
    case '/backstage/EmployeeRegistration.html':
        require 'animal_shop/backstage/EmployeeRegistration.html';
        break;
    case '/animal_shop/backstage/EmployeeRegistration.html':
        require 'animal_shop/backstage/EmployeeRegistration.html';
        break;
    case '/EmployeeRegistration.html':
        require 'animal_shop/backstage/EmployeeRegistration.html';
        break;
    case '/backstage/index.php':
        require 'animal_shop/backstage/index.php';
        break;
    case '/conn.php':
        require 'animal_shop/backstage/conn.php';
        break;
    case '/backstage/components/animal/index.php':
        require 'animal_shop/backstage/components/animal/index.php';
        break;
    case '/backstage/components/customer/index.php':
        require 'animal_shop/backstage/components/customer/index.php';
        break;
    case '/backstage/components/finance/index.php':
        require 'animal_shop/backstage/components/finance/index.php';
        break;
    case '/backstage/components/department/index.php':
        require 'animal_shop/backstage/components/department/index.php';
        break;
    case '/backstage/components/employee/index.php':
        require 'animal_shop/backstage/components/employee/index.php';
        break;
    case '/backstage/components/shops/index.php':
        require 'animal_shop/backstage/components/shops/index.php';
        break;
    case '/backstage/components/animal/editor.html':
        require 'animal_shop/backstage/components/animal/editor.html';
        break;
    case '/backstage/components/customer/editor.html':
        require 'animal_shop/backstage/components/customer/editor.html';
        break;
    case '/backstage/components/finance/editor.html':
        require 'animal_shop/backstage/components/finance/editor.html';
        break;
    case '/backstage/components/department/editor.html':
        require 'animal_shop/backstage/components/department/editor.html';
        break;
    case '/backstage/components/employee/editor.html':
        require 'animal_shop/backstage/components/employee/editor.html';
        break;
    case '/backstage/components/shops/editor.html':
        require 'animal_shop/backstage/components/shops/editor.html';
        break;
    case '/animalAddDo.php':
        require 'animal_shop/backstage/components/animal/animalAddDo.php';
        break;
    case 'financeAddDo.php':
        require 'animal_shop/backstage/components/finance/financeAddDo.php';
        break;
    case 'customerAddDo.php':
        require 'animal_shop/backstage/components/customer/customerAddDo.php';
        break;
    case 'departmentAddDo.php':
        require 'animal_shop/backstage/components/department/departmentAddDo.php';
        break;
    case 'employeeAddDo.php':
        require 'animal_shop/backstage/components/employee/employeeAddDo.php';
        break;
    case 'shopsAddDo.php':
        require 'animal_shop/backstage/components/employee/employeeAddDo.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}

?>