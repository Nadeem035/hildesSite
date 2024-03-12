<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'hildes';

$route['index'] = 'Hildes/index';

$route['about-us'] = 'Hildes/about_us';
$route['contact-us'] = 'Hildes/contact_us';
$route['privacy-policy'] = 'Hildes/privacy_policy';
$route['terms-and-conditions'] = 'Hildes/terms_and_conditions';
$route['pricing'] = 'Hildes/pricing';
$route['team'] = 'Hildes/team';
$route['faqs'] = 'Hildes/faqs';
$route['testimonials'] = 'Hildes/testimonials';
$route['our-mission'] = 'Hildes/our_mission';

$route['services'] = 'Hildes/services';
$route['service/(:any)'] = 'Hildes/service_detail/$1';

$route['blog'] = 'Hildes/blog';
$route['blog/(:any)'] = 'Hildes/blog_detail/$1';
$route['submit-newsletter'] = 'Hildes/submit_newsletter';


$route['sitemap.xml'] = 'Hildes/sitemap';
$route['robots.txt'] = 'Hildes/robots';

// $route['(admin)'] = "Admin";
// $route['listing'] = 'Hildes/listing';
// $route['(:any)'] = "Hildes/index/$1";

// $route['(.*)'] = 'Hildes/index/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
