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

//Home
Router::get('/',			'HomeController/index');
Router::get('home/',		'HomeController/index');
Router::get('home/index',	'HomeController/index');

Router::get('home/login','HomeController/login');
Router::get('home/topten','HomeController/topten');
Router::get('home/register',    'HomeController/register');

//User
Router::post('user/register',   'UserController/register');
Router::get('user/edit',        'UserController/edit');
Router::post('user/login',      'UserController/login');
Router::post('user/edit',       'UserController/edit');
//Router::post('user/update',       'UserController/update');
Router::get('user/settings',    'UserController/settings');
Router::post('user/statistics', 'UserController/statistics');

Router::get('user/logout',      'UserController/logout');

//Backend
Router::get('backend/index',	'BackendController/index');
Router::get('backend/',     	'BackendController/index');
Router::get('game/gameview',       'PokerController/game');
Router::get('game/betone',       'PokerController/bet1');
Router::get('game/bettwo',       'PokerController/bet2');
Router::get('game/betthree',       'PokerController/bet3');
Router::get('game/betfour',       'PokerController/bet4');
Router::get('game/betfive',       'PokerController/bet5');



/************** End of URLEncoder Routing Rules ************************************/