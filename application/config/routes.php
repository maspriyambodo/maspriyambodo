<?php

defined('BASEPATH')OR exit('No direct script access allowed');
$route['default_controller'] = 'Home';
$route['404_override'] = 'Error_404';
$route['translate_uri_dashes'] = FALSE;
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8