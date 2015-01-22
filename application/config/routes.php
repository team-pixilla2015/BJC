<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "manage";
$route['404_override'] = '';

/*===== Main Page =====*/
$route['home'] 	= "manage";
$route['company'] = "manage/company";
$route['business'] = "manage/business_brands";
$route['business/category'] = "manage/business_category";
$route['business/company'] = "manage/business_company";
$route['business/supply_chain'] = "manage/business_supply_chain";
$route['corporate'] = "manage/corporate";
$route['investor'] = "manage/investor";
$route['news_event'] = "manage/news_events";
$route['career'] = "manage/career";
$route['contact'] = "manage/contact";
/*=====================*/


/*====== Business =====*/
$route['sub_brands'] = "manage/sub_business01";
$route['sub_category'] = "manage/sub_business02";
$route['sub_company'] = "manage/sub_business03";
$route['sub_supply_chain'] = "manage/sub_business04";
/*=====================*/

/*=== News & Events ===*/
$route['news_event/new'] = "manage/sub_news";
$route['news_event/news-clipping'] = "manage/sub_news_clipping";
$route['news_event/tvc'] = "manage/sub_tvc";
$route['news_event/promotion'] = "manage/sub_promotion";
$route['news_event/csr'] = "manage/sub_csr";
$route['news_event/gallery'] = "manage/sub_gallery";
/*=====================*/

/*====== Career =======*/
$route['career/jop'] = "manage/sub_job_opportunity";
$route['career/register'] = "manage/sub_register";
$route['career/jop/detail'] = "manage/sub_job_detail";
/*=====================*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */