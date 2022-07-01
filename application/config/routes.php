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
//
$route['admin'] = 'admin/user/login';
$route['default_controller'] = 'page/home';
$route['services'] = 'page/services';
$route['portfolio'] = 'page/portfolio';
$route['case-studies'] = 'page/case_studies';
$route['about'] = 'page/about';
$route['blog'] = 'page/blog';
$route['contact'] = 'page/contact';


$route['domain'] = 'page/domain';
$route['hosting'] = 'page/hosting';
$route['reporting'] = 'page/reporting';

$route['mobile-app-development'] = 'page/cms/2';
$route['logo-and-branding'] = 'page/cms/4';
$route['website-design'] = 'page/cms/5';
$route['mobile-app-design'] = 'page/cms/6';
$route['graphic-design'] = 'page/cms/7';
$route['content-management-system'] = 'page/cms/9';
$route['video-production'] = 'page/cms/8';
$route['ecommerce'] = 'page/cms/10';
$route['search-engine-optimization'] = 'page/cms/11';
$route['email-marketing'] = 'page/cms/12';
$route['display-marketing'] = 'page/cms/13';
$route['social-media-marketing'] = 'page/cms/14';

$route['digital-strategy'] = 'page/digitalstrategy';
$route['business-consulting'] = 'page/businessconsulting';
$route['content-writing'] = 'page/contentwriting';
$route['big-data-analysis'] = 'page/bigdataanalysis';
$route['team'] = 'page/team';
$route['awards-and-recognitions'] = 'page/awardsandrecognitions';
$route['career'] = 'page/career';
$route['customer-reviews'] = 'page/customerreviews';
$route['faqs'] = 'page/faqs';
$route['search-results'] = 'page/searchresults';
$route['terms-conditions'] = 'page/termsconditions';
$route['apply-from'] = 'page/applyfrom';
$route['blog-details'] = 'page/blogdetails';
$route['privacy-policy'] = 'page/privacypolicy';
$route['index'] = 'page/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
