<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'portofolio::index');
$routes->post('/contact', 'portofolio::contact');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');

$routes->get('/signup', 'Auth::signup');
$routes->post('/signup', 'Auth::processSignup');

$routes->get('/logout', 'Auth::logout');

$routes->get('utsksi', 'Project::utsksi');
$routes->post('utsksi/proses', 'Project::proses');

$routes->get('praktikum1', function () {
    return redirect()->to(base_url('project/prakt1 input text/formText.php'));
});
$routes->get('praktikum2', function () {
    return redirect()->to(base_url('project/prakt2 input radio/kalkulator.php'));
});
$routes->get('praktikum3', function () {
    return redirect()->to(base_url('project/prakt3 input checkbox/formCheckbox.php'));
});
$routes->get('praktikum4', function () {
    return redirect()->to(base_url('project/prakt4 input combobox/formCombobox.php'));
});
$routes->get('praktikum5', function () {
    return redirect()->to(base_url('project/prakt5 input textarea/formTextArea.php'));
});
$routes->get('praktikum6', function () {
    return redirect()->to(base_url('project/formLengkap/formLengkap.php'));
});
$routes->get('praktikum7', function () {
    return redirect()->to(base_url('project/login/index.php'));
});
$routes->get('praktikum8', function () {
    return redirect()->to(base_url('project/login/signup.php'));
});