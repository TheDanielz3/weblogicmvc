<?php
/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 02-05-2016
 * Time: 11:18
 */
use ArmoredCore\Facades\Router;

/****************************************************************************
 *  URLEncoder/HTTPRouter Routing Rules
 *  Use convention: controllerName@methodActionName
 ****************************************************************************/

Router::get('/',			'HomeController/index');
Router::get('home/',		'HomeController/index');
Router::get('home/index',	'HomeController/index');

Router::get('home/login','HomeController/login');
Router::get('home/topten','HomeController/topten');



Router::get('home/register','HomeController/register');
Router::post('user/register','UserController/register');
Router::get('user/edit','UserController/edit');

Router::get('user/','UserController/index');
Router::get('user/index','UserController/index');
Router::post('user/submitlogin','UserController');
Router::post('user/edit','UserController/edit');
Router::get('user/settings','UserController/settings');
Router::post('user/statistics','UserController/statistics');






/************** End of URLEncoder Routing Rules ************************************/