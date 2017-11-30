<?php 
//test
$router->get('about','PagesController@about');
$router->get('about/culture','PagesController@aboutculture');
$router->get('contact','PagesController@contact');
$router->post('users','UsersController@store');
$router->get('users','UsersController@index');
$router->get('users/{id}', 'UsersController@showuser');
$router->post('users/delete', 'UsersController@delete');
$router->get('users/edit/{id}', 'UsersController@edituser');
$router->post('users/edit', 'UsersController@edituserpost');

//admin application
$router->get('admin','AdminController@home');
$router->post('admin/team','AdminController@storeteam');
$router->post('admin/player','AdminController@storeplayer');
$router->get('admin/add-player','AdminController@addplayer');
$router->get('admin/team/edit/{team_cut}','AdminController@editteam');
$router->post('admin/team/edit','AdminController@editteampost');
$router->get('admin/player/edit/{player_name}/{id}','AdminController@editplayer');
$router->post('admin/player/edit','AdminController@editplayerpost');
//show
$router->get('admin/team/{team_cut}','AdminController@showteam');
$router->get('admin/player/{player_name}/{id}','AdminController@showplayer');

$router->post('admin/player/video','AdminController@addvideo');
$router->post('admin/player/delete','AdminController@deleteplayer');
$router->post('admin/team/delete','AdminController@deleteteam');

//players
$router->get('admin/players','AdminController@players');
$router->get('admin/players/search/{search}','AdminController@playerssearch');
$router->get('admin/players/all','AdminController@playersall');


//login
$router->get('admin/register','LoginController@register');
$router->post('admin/register','LoginController@registerpost');
$router->post('admin/logout','LoginController@logout');

require ('normalroutes.php');