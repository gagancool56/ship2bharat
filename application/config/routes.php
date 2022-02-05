<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact-us']['post'] = 'EmailController/contactus';
