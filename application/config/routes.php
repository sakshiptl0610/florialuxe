<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['products'] = 'Home/products';
$route['checkout'] = 'Home/checkout';
$route['productdetails'] = 'Home/productdetails';
$route['cart'] = 'Home/cart';
