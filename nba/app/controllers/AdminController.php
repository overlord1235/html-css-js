<?php 

namespace App\Controllers;
use App\Core\App;
use App\Core\Session;
use App\Models\TeamModel;
use App\Models\PlayerModel;

class AdminController {

	public function home(){
		$teams = TeamModel::selectAll("teams");
		return view('admin/index',[
			'teams'=>$teams
		]);
	}
	public function storeteam(){
		$id=TeamModel::insert('teams', [
			'team_name'=>$_POST['name'],
			'team_cut'=>$_POST['shortcut'],
			'team_website'=>$_POST['website'],
			'cover' =>$_POST['cover']
		],$_FILES);

		$team=TeamModel::selectone('teams',['id_team' => $id]);
		$team_cut=$team[0]->team_cut;

		notify('Success',"Inserted team","success");
		$redirect="admin/team/".$team_cut;
		redirect($redirect);
	}

	public function storeplayer(){
		$id=PlayerModel::insert('players', [
			'firstname'=>$_POST['firstname'],
			'lastname'=>$_POST['lastname'],
			'position'=>$_POST['position'],
			'number'=>$_POST['number'],
			'description'=>$_POST['description'],
			'height'=>$_POST['height'],
			'weight'=>$_POST['weight'],
			'id_team'=>$_POST['id_team'],
			'birthday'=>$_POST['birthday']
		],$_FILES);

		$player=PlayerModel::selectone('players',['id_player' => $id]);
		$name=$player[0]->firstname;
		notify('Success',"Inserted player","success");
		$redirect="admin/player/".$name."/".$id;
		redirect($redirect);
	}

	public function addplayer(){
		$teams = TeamModel::selectAll("teams");
		return view('admin/player/add',[
			'teams'=>$teams
		]);
	}

	public function editteam($vars){
		return view('admin/team/edit',[
			'team' => TeamModel::selectone('teams',['team_cut' => $vars[0]])
		]);
	}

	public function editteampost(){
		TeamModel::edit('teams', [
			'team_name'=>$_POST['name'],
			'team_cut'=>$_POST['shortcut'],
			'team_website'=>$_POST['website'],
			'cover'=>$_POST['cover']
		],['id_team' => $_POST['id']],$_FILES);
		$team=TeamModel::selectone('teams',['id_team' => $_POST['id']]);
		$team_cut=$team[0]->team_cut;

		notify('Success',"Edited team","success");
		$redirect="admin/team/".$team_cut;
		redirect($redirect);

	}
	public function editplayer($vars){
		$player=PlayerModel::selectonewithmore('players',['firstname' => $vars[0],'id_player'=>$vars[1]]);
		$teams = TeamModel::selectAll("teams");
		return view('admin/player/edit',[
			'player' => $player,
			'teams' => $teams
		]);
	}
	public function editplayerpost (){
		PlayerModel::edit('players', [
			'firstname'=>$_POST['firstname'],
			'lastname'=>$_POST['lastname'],
			'position'=>$_POST['position'],
			'number'=>$_POST['number'],
			'description'=>$_POST['description'],
			'height'=>$_POST['height'],
			'weight'=>$_POST['weight'],
			'id_team'=>$_POST['id_team'],
			'birthday'=>$_POST['birthday']
		],['id_player' => $_POST['id']],$_FILES);


		$player=PlayerModel::selectone('players',['id_player' => $_POST['id']]);

		notify('Success',"Edited player","success");
		$redirect="admin/player/".$player[0]->firstname."/".$player[0]->id_player;

		redirect($redirect);
	}

	public function showteam($vars){
		$team=TeamModel::selectone('teams',['team_cut' => $vars[0]]);
		$idteam=$team[0]->id_team;
		$teams = TeamModel::selectAll("teams");
		$players=PlayerModel::selectone('players',['id_team' => $idteam]);
		return view('admin/team/show',[
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
		return view('admin/player/show',[
			'player' => $player,
			'videos' => $videos,
			'team' => $team,
			'players' => $players
		]);
	}

	public function addvideo(){
		PlayerModel::insertvideo('ytvideos', [
			'id_player'=>$_POST['id_player'],
			'link' => $_POST['link']
		]);

		$player=PlayerModel::selectone('players',['id_player' => $_POST['id_player']]);

		notify('Success',"Added video","success");
		$redirect="admin/player/".$player[0]->firstname."/".$player[0]->id_player;

		redirect($redirect);
	}
	public function deleteplayer(){
		PlayerModel::deleteplayer('players', [
			'id_player'=>$_POST['id_player']
		]);
		
		notify('Success',"Deleted player","success");
		redirect('admin');
	}
	public function deleteteam(){
		PlayerModel::deleteteam('teams', [
			'id_team'=>$_POST['id_team']
		]);
		notify('Success',"Deleted team","success");
		redirect('admin');
	}

	public function players(){
		$players=PlayerModel::customquery('SELECT * FROM teams as T,players as P WHERE T.id_team=P.id_team');
		return view('admin/player/all',[
			'players' => $players
		]);
	}
	public function playerssearch($search){

		$players=PlayerModel::customquery("SELECT * FROM teams as T,players as P WHERE T.id_team=P.id_team AND P.firstname LIKE ?",
			["%{$search[0]}%"]
		);
		return view('admin/player/search',[
			'players' => $players
		]);
	}

	public function playersall(){
		$players=PlayerModel::selectAll('players');
		return view('admin/player/searchlist',[
			'players' => $players
		]);

	}
	
}