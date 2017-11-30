<?php 

$router->get('','NormalController@home');
$router->get('players','NormalController@players');
$router->post('admin/login','LoginController@login');
$router->get('team/{team_cut}','NormalController@showteam');
$router->get('player/{player_name}/{id}','NormalController@showplayer');

$router->get('players/search/{search}','NormalController@playerssearch');
$router->get('players/all','NormalController@playersall');
?>