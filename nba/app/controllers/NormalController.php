<?php 

namespace App\Controllers;
use App\Core\App;
use App\Core\Session;
use App\Models\TeamModel;
use App\Models\PlayerModel;

class NormalController {

	public function home(){
		$teams = TeamModel::selectAll("teams");
		return view('normal/home',[
			'teams'=>$teams
		]);
	}

	public function showteam($vars){
		$team=TeamModel::selectone('teams',['team_cut' => $vars[0]]);
		$idteam=$team[0]->id_team;
		$teams = TeamModel::selectAll("teams");
		$players=PlayerModel::selectone('players',['id_team' => $idteam]);
		return view('normal/team/show',[
			'team' => $team,
			'teams' => $teams,
			'players' => $players
		]);
	}


	public function showplayer($vars){
		$player=PlayerModel::selectonewithmore('players',['firstname' => $vars[0],'id_player'=>$vars[1]]);
		$id_player=$player[0]->id_player;
		$id_team=$player[0]->id_team;
		$videos=PlayerModel::selectwithlimit('ytvideos',['id_player' => $id_player],"4","id_videos");
		$team=PlayerModel::selectone('teams',['id_team' => $id_team]);
		$players=PlayerModel::selectAll('players');
		return view('normal/player/show',[
			'player' => $player,
			'videos' => $videos,
			'team' => $team,
			'players' => $players
		]);
	}



	public function playerssearch($search){
		$players=PlayerModel::customquery("SELECT * FROM teams as T,players as P WHERE T.id_team=P.id_team AND P.firstname LIKE ?",
			["%{$search[0]}%"]
		);
		return view('normal/player/search',[
			'players' => $players
		]);
	}

	public function playersall(){
		$players=PlayerModel::selectAll('players');
		return view('normal/player/searchlist',[
			'players' => $players
		]);

	}
	public function players(){
	
		$players=PlayerModel::customquery('SELECT * FROM teams as T,players as P WHERE T.id_team=P.id_team');
		return view('normal/player/all',[
			'players' => $players
		]);
	}
	
}