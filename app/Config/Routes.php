<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// pilih mood
$routes->get('mood', 'Home::mood');
$routes->post('insert/mood', 'Home::insert_mood');

//edukasi
$routes->get('edukasi', 'Home::edukasi');
$routes->get('edukasi/detail/(:num)', 'Home::detailedu/$1');

//survey
$routes->get('survey','Home::survey');
$routes->get('survey1','Home::survey1');
$routes->get('survey2','Home::survey2');
$routes->post('insert/survey', 'Home::insert_survey');
$routes->post('insert/survey1', 'Home::insert_survey1');
$routes->post('insert/survey2', 'Home::insert_survey2');

//hasil
$routes->get('hasil', 'Home::hasil');
$routes->get('hasil1', 'Home::hasil1');
$routes->get('hasil2', 'Home::hasil2');


//login
$routes->get('login', 'Home::login');
$routes->post('login/user', 'Home::login_user');

//registrasi
$routes->get('registrasi','Home::registrasi');
$routes->post('insert/register', 'Home::insert_register');

//profil
$routes->get('profil', 'Home::profil');

//edit profil
$routes->get('editprofil', 'Home::editprofil');
$routes->post('updateprofil', 'Home::updateprofil');

//anemia
$routes->get('anemia', 'Home::anemia');
$routes->get('dhd', 'Home::dhd');


//website
$routes->get('edukasilist', 'Home::edukasilist');
$routes->get('edukasiinput', 'Home::edukasiinput');
$routes->get('edukasiedit/(:num)','Home::edukasiedit/$1');
$routes->get('edukasidelete/(:num)','Home::delete/$1');
$routes->post('edukasi/web', 'Home::insertedukasiweb');
$routes->post('update/web/(:num)', 'Home::updateedukasiweb/$1');
