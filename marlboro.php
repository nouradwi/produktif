<?php
@include_once "locale.inc.php";

$CONFIG['LOG_DIR'] = "../logs/";
$GLOBAL_PATH = "../";
$APP_PATH = "../id/";
$ENGINE_PATH = "../engine/";
$WEBROOT = "../public_html/";

//error_reporting(E_ALL & ~E_DEPRECATED);
error_reporting(0);
//ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
//set aplikasi yang digunakan
define('APPLICATION','application');
define('COORPORATE_APPS','coorporate_apps');
define('MOBILE_APPS','mobile');
define('WAP_APPS','wap_apps');
define('DASHBOARD_APPS','dashboard');

define('WIDGET_DOMAIN_WEB',APPLICATION."/widgets/");
define('WIDGET_DOMAIN_COORPORATE',COORPORATE_APPS."/widgets/");
define('WIDGET_DOMAIN_MOBILE',MOBILE_APPS."/widgets/");
define('WIDGET_DOMAIN_WAP',WAP_APPS."/widgets/"); //new
define('WIDGET_DOMAIN_DASHBOARD',DASHBOARD_APPS."/widgets/"); //new

define('HELPER_DOMAIN_WEB',APPLICATION."/helper/");
define('HELPER_DOMAIN_COORPORATE',COORPORATE_APPS."/helper/");
define('HELPER_DOMAIN_MOBILE',MOBILE_APPS."/helper/");
define('HELPER_DOMAIN_WAP',WAP_APPS."/helper/"); //new
define('HELPER_DOMAIN_DASHBOARD',DASHBOARD_APPS."/helper/"); //new

define('MODULES_DOMAIN_WEB',$APP_PATH.APPLICATION."/modules/");
define('MODULES_DOMAIN_COORPORATE',$APP_PATH.COORPORATE_APPS."/modules/");
define('MODULES_DOMAIN_MOBILE',$APP_PATH.MOBILE_APPS."/modules/");
define('MODULES_DOMAIN_WAP',$APP_PATH.WAP_APPS."/modules/"); //new
define('MODULES_DOMAIN_DASHBOARD',$APP_PATH.DASHBOARD_APPS."/modules/"); //new

define('TEMPLATE_DOMAIN_WEB',APPLICATION."/web/");
define('TEMPLATE_DOMAIN_COORPORATE',APPLICATION."/coorporate/");
define('TEMPLATE_DOMAIN_MOBILE',APPLICATION."/mobile/");
define('TEMPLATE_DOMAIN_WAP',APPLICATION."/wap/"); //new
define('TEMPLATE_DOMAIN_DASHBOARD',APPLICATION."/dashboard/"); //new

define('SCHEMA_DATA','code2book');
//set TRUE jika dalam local
$local = true;
$DEVELOPMENT_MODE = true;
$CONFIG['DEFAULT_MODULES'] = "homepage.php";
$CONFIG['DEFAULT_MODULES_ADMIN'] = "homepage.php";
$CONFIG['VIEW_ON'] = 1;
$CONFIG['DINAMIC_MODULE'] = "homepage";
$CONFIG['REGISTER_PAGE'] = "registers";
$CONFIG['LOCAL_DEVELOPMENT'] = true;
$CONFIG['DELAYTIME'] = 1;
$CONFIG['radius'] = 100;
//WEB APP BASE DOMAIN
// echo ("preview.blackchess.com");localhost/ if(preg_match("/dev./i",$_SERVER['HTTP_HOST'])){
$DOMAIN = "http://{$_SERVER['HTTP_HOST']}/new_sscr/";
$PUBLIC_HTML = ""; }else{
$DOMAIN = "http://{$_SERVER['HTTP_HOST']}/new_sscr/";
$PUBLIC_HTML = "public_html/"; }
//$CONFIG['BASE_DOMAIN_PATH'] = "http://preview.blackchess.com/profile/"; //live preview
$CONFIG['BASE_DOMAIN_PATH'] = "http://{$_SERVER['HTTP_HOST']}/new_sscr/public_html/"; //localhost

$CONFIG['CLOSED_WEB'] = false;
$CONFIG['TEASER_DOMAIN'] = "{$DOMAIN}";
$CONFIG['MAINTENANCE'] = false;
$CONFIG['BASE_DOMAIN'] = "{$DOMAIN}{$PUBLIC_HTML}";
$CONFIG['DASHBOARD_DOMAIN'] = "{$DOMAIN}dashboard_html/";
$CONFIG['ASSETS_DOMAIN_APP'] =
$CONFIG['BASE_DOMAIN']."public_assets/";
$CONFIG['ASSETS_DOMAIN_WEB'] =
$CONFIG['BASE_DOMAIN']."assets/";
